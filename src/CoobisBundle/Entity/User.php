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
    protected $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $datas;

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
