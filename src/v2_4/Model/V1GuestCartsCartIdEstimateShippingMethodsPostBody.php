<?php

namespace Kiboko\Magento\V2_4\Model;

class V1GuestCartsCartIdEstimateShippingMethodsPostBody
{
    /**
     * Interface AddressInterface
     *
     * @var QuoteDataAddressInterface
     */
    protected $address;
    /**
     * Interface AddressInterface
     *
     * @return QuoteDataAddressInterface
     */
    public function getAddress(): QuoteDataAddressInterface
    {
        return $this->address;
    }
    /**
     * Interface AddressInterface
     *
     * @param QuoteDataAddressInterface $address
     *
     * @return self
     */
    public function setAddress(QuoteDataAddressInterface $address): self
    {
        $this->address = $address;
        return $this;
    }
}