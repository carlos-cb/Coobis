<?php

namespace CoobisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Data
 */
class Data
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $mozTitle;

    /**
     * @var string
     */
    private $mozUrl;

    /**
     * @var string
     */
    private $mozExternalLinks;

    /**
     * @var string
     */
    private $mozRank;

    /**
     * @var string
     */
    private $mozSubdomainMozRank;

    /**
     * @var string
     */
    private $mozHttpStatusCode;

    /**
     * @var string
     */
    private $mozPageAuthority;

    /**
     * @var string
     */
    private $mozDomainAuthority;

    /**
     * @var string
     */
    private $mozLinks;

    /**
     * @var int
     */
    private $userId;


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
     * Set url
     *
     * @param string $url
     * @return Data
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set mozTitle
     *
     * @param string $mozTitle
     * @return Data
     */
    public function setMozTitle($mozTitle)
    {
        $this->mozTitle = $mozTitle;

        return $this;
    }

    /**
     * Get mozTitle
     *
     * @return string 
     */
    public function getMozTitle()
    {
        return $this->mozTitle;
    }

    /**
     * Set mozUrl
     *
     * @param string $mozUrl
     * @return Data
     */
    public function setMozUrl($mozUrl)
    {
        $this->mozUrl = $mozUrl;

        return $this;
    }

    /**
     * Get mozUrl
     *
     * @return string 
     */
    public function getMozUrl()
    {
        return $this->mozUrl;
    }

    /**
     * Set mozExternalLinks
     *
     * @param string $mozExternalLinks
     * @return Data
     */
    public function setMozExternalLinks($mozExternalLinks)
    {
        $this->mozExternalLinks = $mozExternalLinks;

        return $this;
    }

    /**
     * Get mozExternalLinks
     *
     * @return string 
     */
    public function getMozExternalLinks()
    {
        return $this->mozExternalLinks;
    }

    /**
     * Set mozRank
     *
     * @param string $mozRank
     * @return Data
     */
    public function setMozRank($mozRank)
    {
        $this->mozRank = $mozRank;

        return $this;
    }

    /**
     * Get mozRank
     *
     * @return string 
     */
    public function getMozRank()
    {
        return $this->mozRank;
    }

    /**
     * Set mozSubdomainMozRank
     *
     * @param string $mozSubdomainMozRank
     * @return Data
     */
    public function setMozSubdomainMozRank($mozSubdomainMozRank)
    {
        $this->mozSubdomainMozRank = $mozSubdomainMozRank;

        return $this;
    }

    /**
     * Get mozSubdomainMozRank
     *
     * @return string 
     */
    public function getMozSubdomainMozRank()
    {
        return $this->mozSubdomainMozRank;
    }

    /**
     * Set mozHttpStatusCode
     *
     * @param string $mozHttpStatusCode
     * @return Data
     */
    public function setMozHttpStatusCode($mozHttpStatusCode)
    {
        $this->mozHttpStatusCode = $mozHttpStatusCode;

        return $this;
    }

    /**
     * Get mozHttpStatusCode
     *
     * @return string 
     */
    public function getMozHttpStatusCode()
    {
        return $this->mozHttpStatusCode;
    }

    /**
     * Set mozPageAuthority
     *
     * @param string $mozPageAuthority
     * @return Data
     */
    public function setMozPageAuthority($mozPageAuthority)
    {
        $this->mozPageAuthority = $mozPageAuthority;

        return $this;
    }

    /**
     * Get mozPageAuthority
     *
     * @return string 
     */
    public function getMozPageAuthority()
    {
        return $this->mozPageAuthority;
    }

    /**
     * Set mozDomainAuthority
     *
     * @param string $mozDomainAuthority
     * @return Data
     */
    public function setMozDomainAuthority($mozDomainAuthority)
    {
        $this->mozDomainAuthority = $mozDomainAuthority;

        return $this;
    }

    /**
     * Get mozDomainAuthority
     *
     * @return string 
     */
    public function getMozDomainAuthority()
    {
        return $this->mozDomainAuthority;
    }

    /**
     * Set mozLinks
     *
     * @param string $mozLinks
     * @return Data
     */
    public function setMozLinks($mozLinks)
    {
        $this->mozLinks = $mozLinks;

        return $this;
    }

    /**
     * Get mozLinks
     *
     * @return string 
     */
    public function getMozLinks()
    {
        return $this->mozLinks;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Data
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }
    /**
     * @var \CoobisBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \CoobisBundle\Entity\User $user
     * @return Data
     */
    public function setUser(\CoobisBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \CoobisBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * @var string
     */
    private $description;


    /**
     * Set description
     *
     * @param string $description
     * @return Data
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}
