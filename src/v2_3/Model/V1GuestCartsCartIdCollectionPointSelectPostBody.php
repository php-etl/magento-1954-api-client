<?php

namespace Kiboko\Magento\V2_3\Model;

class V1GuestCartsCartIdCollectionPointSelectPostBody
{
    /**
     *
     *
     * @var int
     */
    protected $entityId;
    /**
     *
     *
     * @return int
     */
    public function getEntityId(): int
    {
        return $this->entityId;
    }
    /**
     *
     *
     * @param int $entityId
     *
     * @return self
     */
    public function setEntityId(int $entityId): self
    {
        $this->entityId = $entityId;
        return $this;
    }
}
