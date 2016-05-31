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
}
