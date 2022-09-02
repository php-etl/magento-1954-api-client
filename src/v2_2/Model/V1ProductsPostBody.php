<?php

namespace Kiboko\Magento\V2_2\Model;

class V1ProductsPostBody
{
    /**
     *
     *
     * @var CatalogDataProductInterface
     */
    protected $product;
    /**
     *
     *
     * @var bool
     */
    protected $saveOptions;
    /**
     *
     *
     * @return CatalogDataProductInterface
     */
    public function getProduct(): CatalogDataProductInterface
    {
        return $this->product;
    }
    /**
     *
     *
     * @param CatalogDataProductInterface $product
     *
     * @return self
     */
    public function setProduct(CatalogDataProductInterface $product): self
    {
        $this->product = $product;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getSaveOptions(): bool
    {
        return $this->saveOptions;
    }
    /**
     *
     *
     * @param bool $saveOptions
     *
     * @return self
     */
    public function setSaveOptions(bool $saveOptions): self
    {
        $this->saveOptions = $saveOptions;
        return $this;
    }
}