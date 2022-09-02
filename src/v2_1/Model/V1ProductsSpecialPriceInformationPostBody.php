<?php

namespace Kiboko\Magento\V2_1\Model;

class V1ProductsSpecialPriceInformationPostBody
{
    /**
     *
     *
     * @var string[]
     */
    protected $skus;
    /**
     *
     *
     * @return string[]
     */
    public function getSkus(): array
    {
        return $this->skus;
    }
    /**
     *
     *
     * @param string[] $skus
     *
     * @return self
     */
    public function setSkus(array $skus): self
    {
        $this->skus = $skus;
        return $this;
    }
}