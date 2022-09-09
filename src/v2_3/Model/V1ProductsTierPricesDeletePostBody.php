<?php

namespace Kiboko\Magento\V2_3\Model;

class V1ProductsTierPricesDeletePostBody
{
    /**
     *
     *
     * @var CatalogDataTierPriceInterface[]|null
     */
    protected $prices;
    /**
     *
     *
     * @return CatalogDataTierPriceInterface[]|null
     */
    public function getPrices(): ?array
    {
        return $this->prices;
    }
    /**
     *
     *
     * @param CatalogDataTierPriceInterface[]|null $prices
     *
     * @return self
     */
    public function setPrices(?array $prices): self
    {
        $this->prices = $prices;
        return $this;
    }
}
