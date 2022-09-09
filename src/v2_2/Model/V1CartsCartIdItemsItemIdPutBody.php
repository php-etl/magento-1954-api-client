<?php

namespace Kiboko\Magento\V2_2\Model;

class V1CartsCartIdItemsItemIdPutBody
{
    /**
     * Interface CartItemInterface
     *
     * @var QuoteDataCartItemInterface|null
     */
    protected $cartItem;
    /**
     * Interface CartItemInterface
     *
     * @return QuoteDataCartItemInterface|null
     */
    public function getCartItem(): ?QuoteDataCartItemInterface
    {
        return $this->cartItem;
    }
    /**
     * Interface CartItemInterface
     *
     * @param QuoteDataCartItemInterface|null $cartItem
     *
     * @return self
     */
    public function setCartItem(?QuoteDataCartItemInterface $cartItem): self
    {
        $this->cartItem = $cartItem;
        return $this;
    }
}
