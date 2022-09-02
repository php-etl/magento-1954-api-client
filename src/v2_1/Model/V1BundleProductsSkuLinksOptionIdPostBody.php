<?php

namespace Kiboko\Magento\V2_1\Model;

class V1BundleProductsSkuLinksOptionIdPostBody
{
    /**
     * Interface LinkInterface
     *
     * @var BundleDataLinkInterface
     */
    protected $linkedProduct;
    /**
     * Interface LinkInterface
     *
     * @return BundleDataLinkInterface
     */
    public function getLinkedProduct(): BundleDataLinkInterface
    {
        return $this->linkedProduct;
    }
    /**
     * Interface LinkInterface
     *
     * @param BundleDataLinkInterface $linkedProduct
     *
     * @return self
     */
    public function setLinkedProduct(BundleDataLinkInterface $linkedProduct): self
    {
        $this->linkedProduct = $linkedProduct;
        return $this;
    }
}
