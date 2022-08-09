<?php

namespace Kiboko\Magento\V2\Model;

class CatalogDataCategoryLinkInterface
{
    /**
     * Category id
     *
     * @var string
     */
    protected $categoryId;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\CategoryLinkInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * 
     *
     * @var int
     */
    protected $position;
    /**
     * Category id
     *
     * @return string
     */
    public function getCategoryId() : string
    {
        return $this->categoryId;
    }
    /**
     * Category id
     *
     * @param string $categoryId
     *
     * @return self
     */
    public function setCategoryId(string $categoryId) : self
    {
        $this->categoryId = $categoryId;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\CategoryLinkInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\CategoryLinkInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPosition() : int
    {
        return $this->position;
    }
    /**
     * 
     *
     * @param int $position
     *
     * @return self
     */
    public function setPosition(int $position) : self
    {
        $this->position = $position;
        return $this;
    }
}