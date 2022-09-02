<?php

namespace Kiboko\Magento\V2_4\Model;

class V1SalesRulesRuleIdPutBody
{
    /**
     * Interface RuleInterface
     *
     * @var SalesRuleDataRuleInterface
     */
    protected $rule;
    /**
     * Interface RuleInterface
     *
     * @return SalesRuleDataRuleInterface
     */
    public function getRule(): SalesRuleDataRuleInterface
    {
        return $this->rule;
    }
    /**
     * Interface RuleInterface
     *
     * @param SalesRuleDataRuleInterface $rule
     *
     * @return self
     */
    public function setRule(SalesRuleDataRuleInterface $rule): self
    {
        $this->rule = $rule;
        return $this;
    }
}