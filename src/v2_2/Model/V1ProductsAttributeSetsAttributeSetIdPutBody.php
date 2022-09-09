<?php

namespace Kiboko\Magento\V2_2\Model;

class V1ProductsAttributeSetsAttributeSetIdPutBody
{
    /**
     * Interface AttributeSetInterface
     *
     * @var EavDataAttributeSetInterface|null
     */
    protected $attributeSet;
    /**
     * Interface AttributeSetInterface
     *
     * @return EavDataAttributeSetInterface|null
     */
    public function getAttributeSet(): ?EavDataAttributeSetInterface
    {
        return $this->attributeSet;
    }
    /**
     * Interface AttributeSetInterface
     *
     * @param EavDataAttributeSetInterface|null $attributeSet
     *
     * @return self
     */
    public function setAttributeSet(?EavDataAttributeSetInterface $attributeSet): self
    {
        $this->attributeSet = $attributeSet;
        return $this;
    }
}
