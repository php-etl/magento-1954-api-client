<?php

namespace Kiboko\Magento\V2_1\Model;

class V1GuestGiftregistryCartIdEstimateShippingMethodsPostBody
{
    /**
     * The estimate registry id
     *
     * @var int
     */
    protected $registryId;
    /**
     * The estimate registry id
     *
     * @return int
     */
    public function getRegistryId(): int
    {
        return $this->registryId;
    }
    /**
     * The estimate registry id
     *
     * @param int $registryId
     *
     * @return self
     */
    public function setRegistryId(int $registryId): self
    {
        $this->registryId = $registryId;
        return $this;
    }
}