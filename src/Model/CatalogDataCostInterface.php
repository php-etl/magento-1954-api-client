<?php

namespace Kiboko\Magento\V2\Model;

class CatalogDataCostInterface
{
    /**
     * Cost value.
     *
     * @var float
     */
    protected $cost;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\CostInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * SKU.
     *
     * @var string
     */
    protected $sku;
    /**
     * Store id.
     *
     * @var int
     */
    protected $storeId;
    /**
     * Cost value.
     *
     * @return float
     */
    public function getCost() : float
    {
        return $this->cost;
    }
    /**
     * Cost value.
     *
     * @param float $cost
     *
     * @return self
     */
    public function setCost(float $cost) : self
    {
        $this->cost = $cost;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\CostInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\CostInterface
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
     * SKU.
     *
     * @return string
     */
    public function getSku() : string
    {
        return $this->sku;
    }
    /**
     * SKU.
     *
     * @param string $sku
     *
     * @return self
     */
    public function setSku(string $sku) : self
    {
        $this->sku = $sku;
        return $this;
    }
    /**
     * Store id.
     *
     * @return int
     */
    public function getStoreId() : int
    {
        return $this->storeId;
    }
    /**
     * Store id.
     *
     * @param int $storeId
     *
     * @return self
     */
    public function setStoreId(int $storeId) : self
    {
        $this->storeId = $storeId;
        return $this;
    }
}