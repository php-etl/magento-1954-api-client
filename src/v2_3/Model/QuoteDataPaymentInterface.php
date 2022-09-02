<?php

namespace Kiboko\Magento\V2_3\Model;

class QuoteDataPaymentInterface
{
    /**
     * Payment additional details
     *
     * @var string[]
     */
    protected $additionalData;
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\PaymentInterface
     *
     * @var QuoteDataPaymentExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * Payment method code
     *
     * @var string
     */
    protected $method;
    /**
     * Purchase order number
     *
     * @var string
     */
    protected $poNumber;
    /**
     * Payment additional details
     *
     * @return string[]
     */
    public function getAdditionalData(): array
    {
        return $this->additionalData;
    }
    /**
     * Payment additional details
     *
     * @param string[] $additionalData
     *
     * @return self
     */
    public function setAdditionalData(array $additionalData): self
    {
        $this->additionalData = $additionalData;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\PaymentInterface
     *
     * @return QuoteDataPaymentExtensionInterface
     */
    public function getExtensionAttributes(): QuoteDataPaymentExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\PaymentInterface
     *
     * @param QuoteDataPaymentExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(QuoteDataPaymentExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Payment method code
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }
    /**
     * Payment method code
     *
     * @param string $method
     *
     * @return self
     */
    public function setMethod(string $method): self
    {
        $this->method = $method;
        return $this;
    }
    /**
     * Purchase order number
     *
     * @return string
     */
    public function getPoNumber(): string
    {
        return $this->poNumber;
    }
    /**
     * Purchase order number
     *
     * @param string $poNumber
     *
     * @return self
     */
    public function setPoNumber(string $poNumber): self
    {
        $this->poNumber = $poNumber;
        return $this;
    }
}