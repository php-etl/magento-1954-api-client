<?php

namespace Kiboko\Magento\V2_4\Model;

class V1ProductsSkuLinksPostBody
{
    /**
     *
     *
     * @var CatalogDataProductLinkInterface[]
     */
    protected $items;
    /**
     *
     *
     * @return CatalogDataProductLinkInterface[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     *
     *
     * @param CatalogDataProductLinkInterface[] $items
     *
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->items = $items;
        return $this;
    }
}