<?php

namespace Kiboko\Magento\V2_2\Model;

class V1ProductsCostPostBody
{
    /**
     *
     *
     * @var CatalogDataCostInterface[]
     */
    protected $prices;
    /**
     *
     *
     * @return CatalogDataCostInterface[]
     */
    public function getPrices(): array
    {
        return $this->prices;
    }
    /**
     *
     *
     * @param CatalogDataCostInterface[] $prices
     *
     * @return self
     */
    public function setPrices(array $prices): self
    {
        $this->prices = $prices;
        return $this;
    }
}
