<?php

namespace Kiboko\Magento\V2_3\Model;

class V1CustomersEmailActivatePutBody
{
    /**
     *
     *
     * @var string|null
     */
    protected $confirmationKey;
    /**
     *
     *
     * @return string|null
     */
    public function getConfirmationKey(): ?string
    {
        return $this->confirmationKey;
    }
    /**
     *
     *
     * @param string|null $confirmationKey
     *
     * @return self
     */
    public function setConfirmationKey(?string $confirmationKey): self
    {
        $this->confirmationKey = $confirmationKey;
        return $this;
    }
}
