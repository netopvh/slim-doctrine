<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Entity\UserRepository")
 * @ORM\Table(name="users")
 */
class User
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $name
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $name;

    /**
     * @var datetime $date_create
     *
     * @ORM\Column(type="datetime")
     */
    protected $date_create;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->date_create = new \DateTime();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set date_create
     *
     * @param \DateTime $date_create
     *
     * @return User
     */
    public function setDateCreate(\DateTime $date_create)
    {
        $this->date_create = $date_create;
        return $this;
    }

    /**
     * Get date_create
     *
     * @return \DateTime
     */
    public function getDateCreate()
    {
        return $this->date_create;
    }
}
