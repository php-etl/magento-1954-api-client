<?php

namespace Kiboko\Magento\V2\Model;

class TaxDataGrandTotalDetailsInterface
{
    /**
     * Tax amount value
     *
     * @var float
     */
    protected $amount;
    /**
     * Group identifier
     *
     * @var int
     */
    protected $groupId;
    /**
     * Tax rates info
     *
     * @var TaxDataGrandTotalRatesInterface[]
     */
    protected $rates;
    /**
     * Tax amount value
     *
     * @return float
     */
    public function getAmount() : float
    {
        return $this->amount;
    }
    /**
     * Tax amount value
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(float $amount) : self
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Group identifier
     *
     * @return int
     */
    public function getGroupId() : int
    {
        return $this->groupId;
    }
    /**
     * Group identifier
     *
     * @param int $groupId
     *
     * @return self
     */
    public function setGroupId(int $groupId) : self
    {
        $this->groupId = $groupId;
        return $this;
    }
    /**
     * Tax rates info
     *
     * @return TaxDataGrandTotalRatesInterface[]
     */
    public function getRates() : array
    {
        return $this->rates;
    }
    /**
     * Tax rates info
     *
     * @param TaxDataGrandTotalRatesInterface[] $rates
     *
     * @return self
     */
    public function setRates(array $rates) : self
    {
        $this->rates = $rates;
        return $this;
    }
}