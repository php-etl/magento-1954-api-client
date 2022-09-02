<?php

namespace Kiboko\Magento\V2_2\Model;

class V1CategoriesCategoryIdProductsPutBody
{
    /**
     *
     *
     * @var CatalogDataCategoryProductLinkInterface
     */
    protected $productLink;
    /**
     *
     *
     * @return CatalogDataCategoryProductLinkInterface
     */
    public function getProductLink(): CatalogDataCategoryProductLinkInterface
    {
        return $this->productLink;
    }
    /**
     *
     *
     * @param CatalogDataCategoryProductLinkInterface $productLink
     *
     * @return self
     */
    public function setProductLink(CatalogDataCategoryProductLinkInterface $productLink): self
    {
        $this->productLink = $productLink;
        return $this;
    }
}
