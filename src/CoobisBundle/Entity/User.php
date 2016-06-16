<?php

namespace CoobisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;


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
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $datas;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->datas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add datas
     *
     * @param \CoobisBundle\Entity\Data $datas
     * @return User
     */
    public function addData(\CoobisBundle\Entity\Data $datas)
    {
        $this->datas[] = $datas;

        return $this;
    }

    /**
     * Remove datas
     *
     * @param \CoobisBundle\Entity\Data $datas
     */
    public function removeData(\CoobisBundle\Entity\Data $datas)
    {
        $this->datas->removeElement($datas);
    }

    /**
     * Get datas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDatas()
    {
        return $this->datas;
    }

    public function __toString() {
        return strval($this->id);
    }
}
