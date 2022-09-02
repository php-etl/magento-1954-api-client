<?php

namespace Kiboko\Magento\V2_1\Model;

class V1NegotiableCartsCartIdGiftCardsPostBody
{
    /**
     * Gift Card Account data
     *
     * @var GiftCardAccountDataGiftCardAccountInterface
     */
    protected $giftCardAccountData;
    /**
     * Gift Card Account data
     *
     * @return GiftCardAccountDataGiftCardAccountInterface
     */
    public function getGiftCardAccountData(): GiftCardAccountDataGiftCardAccountInterface
    {
        return $this->giftCardAccountData;
    }
    /**
     * Gift Card Account data
     *
     * @param GiftCardAccountDataGiftCardAccountInterface $giftCardAccountData
     *
     * @return self
     */
    public function setGiftCardAccountData(GiftCardAccountDataGiftCardAccountInterface $giftCardAccountData): self
    {
        $this->giftCardAccountData = $giftCardAccountData;
        return $this;
    }
}