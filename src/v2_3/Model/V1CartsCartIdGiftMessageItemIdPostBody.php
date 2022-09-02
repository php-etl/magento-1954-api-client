<?php

namespace Kiboko\Magento\V2_3\Model;

class V1CartsCartIdGiftMessageItemIdPostBody
{
    /**
     * Interface MessageInterface
     *
     * @var GiftMessageDataMessageInterface
     */
    protected $giftMessage;
    /**
     * Interface MessageInterface
     *
     * @return GiftMessageDataMessageInterface
     */
    public function getGiftMessage(): GiftMessageDataMessageInterface
    {
        return $this->giftMessage;
    }
    /**
     * Interface MessageInterface
     *
     * @param GiftMessageDataMessageInterface $giftMessage
     *
     * @return self
     */
    public function setGiftMessage(GiftMessageDataMessageInterface $giftMessage): self
    {
        $this->giftMessage = $giftMessage;
        return $this;
    }
}