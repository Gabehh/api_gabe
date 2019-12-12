<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Hateoas\Configuration\Annotation as Hateoas;
use JMS\Serializer\Annotation as JMS;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 *
 * @JMS\XmlNamespace(uri="http://www.w3.org/2005/Atom", prefix="atom")
 * @JMS\AccessorOrder(
 *     "custom",
 *     custom={ "id", "email", "roles", "_links" }
 *     )
 *
 * @Hateoas\Relation(
 *     name="self",
 *     href="expr(constant('\\App\\Controller\\ApiUsersController::RUTA_API') ~ '/' ~ object.getId())"
 * )
 *
 * @JMS\XmlRoot("user")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     *
     * @var int $id
     *
     * @JMS\XmlAttribute
     */
    private $id;

    /**
     * @var string $email
     *
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     *
     * @var array $roles
     *
     * @JMS\Exclude()
     */
    private $roles;

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     *
     * @JMS\Exclude()
     */
    private $password;

    /**
     * User constructor.
     * @param string $email
     * @param string $password
     * @param array $roles
     */
    public function __construct(string $email = '', string $password = '', array $roles = [ 'ROLE_USER' ])
    {
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_ARGON2ID);
        $this->roles = $roles;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return $this->email;
    }

    /**
     * @see UserInterface
     *
     * @JMS\VirtualProperty(name="roles")
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = password_hash($password, PASSWORD_ARGON2ID);

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}
