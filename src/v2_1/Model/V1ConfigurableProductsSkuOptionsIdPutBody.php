<?php

namespace Kiboko\Magento\V2_1\Model;

class V1ConfigurableProductsSkuOptionsIdPutBody
{
    /**
     * Interface OptionInterface
     *
     * @var ConfigurableProductDataOptionInterface|null
     */
    protected $option;
    /**
     * Interface OptionInterface
     *
     * @return ConfigurableProductDataOptionInterface|null
     */
    public function getOption(): ?ConfigurableProductDataOptionInterface
    {
        return $this->option;
    }
    /**
     * Interface OptionInterface
     *
     * @param ConfigurableProductDataOptionInterface|null $option
     *
     * @return self
     */
    public function setOption(?ConfigurableProductDataOptionInterface $option): self
    {
        $this->option = $option;
        return $this;
    }
}
