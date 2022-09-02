<?php

namespace Kiboko\Magento\V2_3\Model;

class V1GuestCartsCartIdTotalsInformationPostBody
{
    /**
     * Interface TotalsInformationInterface
     *
     * @var CheckoutDataTotalsInformationInterface
     */
    protected $addressInformation;
    /**
     * Interface TotalsInformationInterface
     *
     * @return CheckoutDataTotalsInformationInterface
     */
    public function getAddressInformation(): CheckoutDataTotalsInformationInterface
    {
        return $this->addressInformation;
    }
    /**
     * Interface TotalsInformationInterface
     *
     * @param CheckoutDataTotalsInformationInterface $addressInformation
     *
     * @return self
     */
    public function setAddressInformation(CheckoutDataTotalsInformationInterface $addressInformation): self
    {
        $this->addressInformation = $addressInformation;
        return $this;
    }
}