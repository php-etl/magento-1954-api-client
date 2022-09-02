<?php

namespace Kiboko\Magento\V2_2\Model;

class V1CartsMinePutBody
{
    /**
     * Interface CartInterface
     *
     * @var QuoteDataCartInterface
     */
    protected $quote;
    /**
     * Interface CartInterface
     *
     * @return QuoteDataCartInterface
     */
    public function getQuote(): QuoteDataCartInterface
    {
        return $this->quote;
    }
    /**
     * Interface CartInterface
     *
     * @param QuoteDataCartInterface $quote
     *
     * @return self
     */
    public function setQuote(QuoteDataCartInterface $quote): self
    {
        $this->quote = $quote;
        return $this;
    }
}