<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="veryfied", type="boolean")
     */
    private $veryfied;


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
     * Set veryfied
     *
     * @param boolean $veryfied
     * @return User
     */
    public function setVeryfied($veryfied)
    {
        $this->veryfied = $veryfied;

        return $this;
    }

    /**
     * Get veryfied
     *
     * @return boolean 
     */
    public function getVeryfied()
    {
        return $this->veryfied;
    }
}
