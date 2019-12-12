<?php

/**
 * PHP version 7.3
 *
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.etsisi.upm.es/ ETS de Ingeniería de Sistemas Informáticos
 */

namespace App\EventListener;

use App\Entity\User;
use DateTime;
use Exception;
use Lexik\Bundle\JWTAuthenticationBundle\Event\JWTCreatedEvent;

/**
 * Class JWTCreatedListener
 */
class JWTCreatedListener
{
    /**
     * @param JWTCreatedEvent $event
     *
     * @return void
     * @throws Exception
     */
    public function onJWTCreated(JWTCreatedEvent $event): void
    {
        $payload = $event->getData();
        /* @var User $user */
        $user = $event->getUser();

        // token expira en 2 horas
        $expiration = new DateTime('+2 hours');
        $payload['exp'] = $expiration->getTimestamp();

        $payload['id'] = $user->getId();
        $payload['email'] = $user->getEmail();

        $event->setData($payload);
    }
}
