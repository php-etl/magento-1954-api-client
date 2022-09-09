<?php

namespace Kiboko\Magento\V2_3\Model;

class V1TaxRulesPostBody
{
    /**
     * Tax rule interface.
     *
     * @var TaxDataTaxRuleInterface|null
     */
    protected $rule;
    /**
     * Tax rule interface.
     *
     * @return TaxDataTaxRuleInterface|null
     */
    public function getRule(): ?TaxDataTaxRuleInterface
    {
        return $this->rule;
    }
    /**
     * Tax rule interface.
     *
     * @param TaxDataTaxRuleInterface|null $rule
     *
     * @return self
     */
    public function setRule(?TaxDataTaxRuleInterface $rule): self
    {
        $this->rule = $rule;
        return $this;
    }
}
