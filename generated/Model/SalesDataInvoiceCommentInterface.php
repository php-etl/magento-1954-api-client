<?php

namespace Kiboko\Magento\Model;

class SalesDataInvoiceCommentInterface
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Is-customer-notified flag value.
     *
     * @var int|null
     */
    protected $isCustomerNotified;
    /**
     * Parent ID.
     *
     * @var int|null
     */
    protected $parentId;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\InvoiceCommentInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Comment.
     *
     * @var string|null
     */
    protected $comment;
    /**
     * Is-visible-on-storefront flag value.
     *
     * @var int|null
     */
    protected $isVisibleOnFront;
    /**
     * Created-at timestamp.
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * Invoice ID.
     *
     * @var int|null
     */
    protected $entityId;
    /**
     * Is-customer-notified flag value.
     *
     * @return int|null
     */
    public function getIsCustomerNotified() : ?int
    {
        return $this->isCustomerNotified;
    }
    /**
     * Is-customer-notified flag value.
     *
     * @param int|null $isCustomerNotified
     *
     * @return self
     */
    public function setIsCustomerNotified(?int $isCustomerNotified) : self
    {
        $this->initialized['isCustomerNotified'] = true;
        $this->isCustomerNotified = $isCustomerNotified;
        return $this;
    }
    /**
     * Parent ID.
     *
     * @return int|null
     */
    public function getParentId() : ?int
    {
        return $this->parentId;
    }
    /**
     * Parent ID.
     *
     * @param int|null $parentId
     *
     * @return self
     */
    public function setParentId(?int $parentId) : self
    {
        $this->initialized['parentId'] = true;
        $this->parentId = $parentId;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\InvoiceCommentInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\InvoiceCommentInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Comment.
     *
     * @return string|null
     */
    public function getComment() : ?string
    {
        return $this->comment;
    }
    /**
     * Comment.
     *
     * @param string|null $comment
     *
     * @return self
     */
    public function setComment(?string $comment) : self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
        return $this;
    }
    /**
     * Is-visible-on-storefront flag value.
     *
     * @return int|null
     */
    public function getIsVisibleOnFront() : ?int
    {
        return $this->isVisibleOnFront;
    }
    /**
     * Is-visible-on-storefront flag value.
     *
     * @param int|null $isVisibleOnFront
     *
     * @return self
     */
    public function setIsVisibleOnFront(?int $isVisibleOnFront) : self
    {
        $this->initialized['isVisibleOnFront'] = true;
        $this->isVisibleOnFront = $isVisibleOnFront;
        return $this;
    }
    /**
     * Created-at timestamp.
     *
     * @return string|null
     */
    public function getCreatedAt() : ?string
    {
        return $this->createdAt;
    }
    /**
     * Created-at timestamp.
     *
     * @param string|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Invoice ID.
     *
     * @return int|null
     */
    public function getEntityId() : ?int
    {
        return $this->entityId;
    }
    /**
     * Invoice ID.
     *
     * @param int|null $entityId
     *
     * @return self
     */
    public function setEntityId(?int $entityId) : self
    {
        $this->initialized['entityId'] = true;
        $this->entityId = $entityId;
        return $this;
    }
}