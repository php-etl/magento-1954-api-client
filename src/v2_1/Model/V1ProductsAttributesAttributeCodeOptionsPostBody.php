<?php

namespace Kiboko\Magento\V2_1\Model;

class V1ProductsAttributesAttributeCodeOptionsPostBody
{
    /**
     * Created from:
     *
     * @var EavDataAttributeOptionInterface
     */
    protected $option;
    /**
     * Created from:
     *
     * @return EavDataAttributeOptionInterface
     */
    public function getOption(): EavDataAttributeOptionInterface
    {
        return $this->option;
    }
    /**
     * Created from:
     *
     * @param EavDataAttributeOptionInterface $option
     *
     * @return self
     */
    public function setOption(EavDataAttributeOptionInterface $option): self
    {
        $this->option = $option;
        return $this;
    }
}