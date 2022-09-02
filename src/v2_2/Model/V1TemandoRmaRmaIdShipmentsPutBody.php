<?php

namespace Kiboko\Magento\V2_2\Model;

class V1TemandoRmaRmaIdShipmentsPutBody
{
    /**
     *
     *
     * @var string[]
     */
    protected $returnShipmentIds;
    /**
     *
     *
     * @return string[]
     */
    public function getReturnShipmentIds(): array
    {
        return $this->returnShipmentIds;
    }
    /**
     *
     *
     * @param string[] $returnShipmentIds
     *
     * @return self
     */
    public function setReturnShipmentIds(array $returnShipmentIds): self
    {
        $this->returnShipmentIds = $returnShipmentIds;
        return $this;
    }
}