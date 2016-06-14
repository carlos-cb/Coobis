<?php

namespace CoobisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 */
class Category
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $categoryName;


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
     * Set categoryName
     *
     * @param string $categoryName
     * @return Category
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    /**
     * Get categoryName
     *
     * @return string 
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    public function __toString() {
        return strval($this->id);
    }
    /**
     * @var string
     */
    private $categoryImgUrl;

    /**
     * @var string
     */
    private $categoryDescription;


    /**
     * Set categoryImgUrl
     *
     * @param string $categoryImgUrl
     * @return Category
     */
    public function setCategoryImgUrl($categoryImgUrl)
    {
        $this->categoryImgUrl = $categoryImgUrl;

        return $this;
    }

    /**
     * Get categoryImgUrl
     *
     * @return string 
     */
    public function getCategoryImgUrl()
    {
        return $this->categoryImgUrl;
    }

    /**
     * Set categoryDescription
     *
     * @param string $categoryDescription
     * @return Category
     */
    public function setCategoryDescription($categoryDescription)
    {
        $this->categoryDescription = $categoryDescription;

        return $this;
    }

    /**
     * Get categoryDescription
     *
     * @return string 
     */
    public function getCategoryDescription()
    {
        return $this->categoryDescription;
    }
}
