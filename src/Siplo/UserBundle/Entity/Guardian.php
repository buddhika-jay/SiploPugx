<?php

namespace Siplo\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="guardian")
 * @ORM\HasLifecycleCallbacks()
 * @UniqueEntity(fields = "username", targetClass = "Siplo\UserBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "Siplo\UserBundle\Entity\User", message="fos_user.email.already_used")
 */
class Guardian extends User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    //Doctrine Lifecycle callbacks
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        $this->addRole('ROLE_GUARDIAN');
//        $this->addGroup('guardians');
    }
}
