<?php

/**
 * PHP version 7.3
 *
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.etsisi.upm.es/ ETS de Ingeniería de Sistemas Informáticos
 */

namespace App\Security;

use App\Controller\Utils;
use App\Entity\Message;
use App\Entity\User;
use InvalidArgumentException;
use Lexik\Bundle\JWTAuthenticationBundle\Exception\ExpiredTokenException;
use Lexik\Bundle\JWTAuthenticationBundle\Exception\InvalidPayloadException;
use Lexik\Bundle\JWTAuthenticationBundle\Exception\InvalidTokenException;
use Lexik\Bundle\JWTAuthenticationBundle\Exception\JWTDecodeFailureException;
use Lexik\Bundle\JWTAuthenticationBundle\Security\Authentication\Token\PreAuthenticationJWTUserToken;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\TokenExtractorInterface;
use RuntimeException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;

/**
 * Class JWTTokenAuthenticator
 */
class JWTTokenAuthenticator extends AbstractGuardAuthenticator
{
    /** @var JWTTokenManagerInterface */
    private $jwtManager;

    /** @var TokenExtractorInterface */
    private $tokenExtractor;

    /**
     * JWTTokenAuthenticator constructor.
     *
     * @param JWTTokenManagerInterface $jwtManager
     * @param TokenExtractorInterface  $tokenExtractor
     */
    public function __construct(
        JWTTokenManagerInterface $jwtManager,
        TokenExtractorInterface $tokenExtractor
    ) {
        $this->jwtManager = $jwtManager;
        $this->tokenExtractor = $tokenExtractor;
    }

    /**
     * Does the authenticator support the given Request?
     * Called on every request to decide if this authenticator should be
     * used for the request. Returning false will cause this authenticator
     * to be skipped.
     *
     * @param Request $request
     *
     * @return bool
     */
    public function supports(Request $request): bool
    {
        return false !== $this->getTokenExtractor()->extract($request);
    }

    /**
     * This will be called on every request and your job is to read the token from the request and return it.
     * If you return null, the rest of the authentication process is skipped.
     * Otherwise, getUser() will be called and the return value is passed as the first argument.
     *
     * @param Request $request
     * @return PreAuthenticationJWTUserToken
     *
     * @throws InvalidTokenException If an error occur while decoding the token
     * @throws ExpiredTokenException If the request token is expired
     */
    public function getCredentials(Request $request): PreAuthenticationJWTUserToken
    {
        $tokenExtractor = $this->getTokenExtractor();
        if (!$tokenExtractor instanceof TokenExtractorInterface) {
            throw new RuntimeException(
                sprintf(
                    'Method "%s::getTokenExtractor()" must return an instance of "%s".',
                    __CLASS__,
                    TokenExtractorInterface::class
                )
            );
        }
        if (false === ($jsonWebToken = $tokenExtractor->extract($request))) {
            return null;
        }

        $preAuthToken = new PreAuthenticationJWTUserToken($jsonWebToken);

        try {
            if (!$payload = $this->jwtManager->decode($preAuthToken)) {
                throw new InvalidTokenException('Invalid JWT Token');
            }
            $preAuthToken->setPayload($payload);
        } catch (JWTDecodeFailureException $e) {
            if (JWTDecodeFailureException::EXPIRED_TOKEN === $e->getReason()) {
                throw new ExpiredTokenException('Token is expired', 0, $e);
            }
            throw new InvalidTokenException('Invalid JWT Token', 0, $e);
        }
        return $preAuthToken;
    }

    /**
     * If getCredentials() returns a non-null value, then this method is called and its return value
     * is passed here as the $credentials argument. Your job is to return an object that implements UserInterface.
     * If you do, then checkCredentials() will be called. If you return null authentication will fail.
     *
     * @param mixed $preAuthToken
     * @param UserProviderInterface $userProvider
     * @return User|null|UserInterface
     */
    public function getUser($preAuthToken, UserProviderInterface $userProvider)
    {
        if (!$preAuthToken instanceof PreAuthenticationJWTUserToken) {
            throw new InvalidArgumentException(
                sprintf(
                    'The first argument of the "%s()" method must be an instance of "%s".',
                    __METHOD__,
                    PreAuthenticationJWTUserToken::class
                )
            );
        }
        $payload = $preAuthToken->getPayload();
        $idClaim = $this->jwtManager->getUserIdClaim();

        if (!isset($payload[$idClaim])) {
            throw new InvalidPayloadException($idClaim);
        }
        $identity = $payload[$idClaim];

        if (!$identity) {
            return null;
        }

        return $userProvider->loadUserByUsername($identity);
    }

    /**
     * If getUser() returns a User object, this method is called.
     * Your job is to verify if the credentials are correct.
     *
     * @param mixed $credentials
     * @param UserInterface $user
     * @return bool
     */
    public function checkCredentials($credentials, UserInterface $user): bool
    {
        return !empty($user->getRoles());
    }

    /**
     * This is called after successful authentication and your job is to either return a Response object
     * that will be sent to the client or null to continue the request.
     *
     * @param Request $request
     * @param TokenInterface $token
     * @param string $providerKey   The provider (i.e. firewall) key
     * @return null|Response
     */
    public function onAuthenticationSuccess(
        Request $request,
        TokenInterface $token,
        $providerKey
    ): ?Response {
        return null;
    }

    /**
     * This is called if authentication fails.
     *
     * @param Request $request
     * @param AuthenticationException $exception
     * @return null|JsonResponse|Response
     */
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        $data = [
            'message' => strtr($exception->getMessageKey(), $exception->getMessageData())
        ];
        return new JsonResponse($data, Response::HTTP_FORBIDDEN);   // 403
    }

    /**
     * Is called when an anonymous request accesses a resource that requires authentication.
     * In case of API we just need to return 401
     *
     * @param Request $request
     * @param AuthenticationException|null $authException
     * @return Response
     */
    public function start(Request $request, AuthenticationException $authException = null): Response
    {
        $message = new Message(Response::HTTP_UNAUTHORIZED, Response::$statusTexts[401]);
        $format = Utils::getFormat($request);
        return Utils::apiResponse(
            $message->getCode(),
            [ 'message' => $message ],
            $format
        );
    }

    /**
     * If you want to support "remember me" functionality, return true from this method.
     *
     * @return bool
     */
    public function supportsRememberMe(): bool
    {
        return false;
    }

    /**
     * Gets the token extractor to be used for retrieving a JWT token in the
     * current request.
     *
     * Override this method for adding/removing extractors to the chain one or
     * returning a different {@link TokenExtractorInterface} implementation.
     *
     * @return TokenExtractorInterface
     */
    protected function getTokenExtractor(): TokenExtractorInterface
    {
        return $this->tokenExtractor;
    }
}
