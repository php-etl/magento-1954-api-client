<?php

namespace Kiboko\Magento\V2_3\Model;

class TemandoShippingDataCollectionPointQuoteCollectionPointInterface
{
    /**
     *
     *
     * @var string
     */
    protected $city;
    /**
     *
     *
     * @var string
     */
    protected $collectionPointId;
    /**
     *
     *
     * @var string
     */
    protected $country;
    /**
     *
     *
     * @var int
     */
    protected $entityId;
    /**
     *
     *
     * @var string
     */
    protected $name;
    /**
     *
     *
     * @var string[]
     */
    protected $openingHours;
    /**
     *
     *
     * @var string
     */
    protected $postcode;
    /**
     *
     *
     * @var int
     */
    protected $recipientAddressId;
    /**
     *
     *
     * @var string
     */
    protected $region;
    /**
     *
     *
     * @var bool
     */
    protected $selected;
    /**
     *
     *
     * @var string[]
     */
    protected $shippingExperiences;
    /**
     *
     *
     * @var string[]
     */
    protected $street;
    /**
     *
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     *
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city): self
    {
        $this->city = $city;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getCollectionPointId(): string
    {
        return $this->collectionPointId;
    }
    /**
     *
     *
     * @param string $collectionPointId
     *
     * @return self
     */
    public function setCollectionPointId(string $collectionPointId): self
    {
        $this->collectionPointId = $collectionPointId;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }
    /**
     *
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country): self
    {
        $this->country = $country;
        return $this;
    }
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
    /**
     *
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     *
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     *
     *
     * @return string[]
     */
    public function getOpeningHours(): array
    {
        return $this->openingHours;
    }
    /**
     *
     *
     * @param string[] $openingHours
     *
     * @return self
     */
    public function setOpeningHours(array $openingHours): self
    {
        $this->openingHours = $openingHours;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }
    /**
     *
     *
     * @param string $postcode
     *
     * @return self
     */
    public function setPostcode(string $postcode): self
    {
        $this->postcode = $postcode;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getRecipientAddressId(): int
    {
        return $this->recipientAddressId;
    }
    /**
     *
     *
     * @param int $recipientAddressId
     *
     * @return self
     */
    public function setRecipientAddressId(int $recipientAddressId): self
    {
        $this->recipientAddressId = $recipientAddressId;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     *
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region): self
    {
        $this->region = $region;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getSelected(): bool
    {
        return $this->selected;
    }
    /**
     *
     *
     * @param bool $selected
     *
     * @return self
     */
    public function setSelected(bool $selected): self
    {
        $this->selected = $selected;
        return $this;
    }
    /**
     *
     *
     * @return string[]
     */
    public function getShippingExperiences(): array
    {
        return $this->shippingExperiences;
    }
    /**
     *
     *
     * @param string[] $shippingExperiences
     *
     * @return self
     */
    public function setShippingExperiences(array $shippingExperiences): self
    {
        $this->shippingExperiences = $shippingExperiences;
        return $this;
    }
    /**
     *
     *
     * @return string[]
     */
    public function getStreet(): array
    {
        return $this->street;
    }
    /**
     *
     *
     * @param string[] $street
     *
     * @return self
     */
    public function setStreet(array $street): self
    {
        $this->street = $street;
        return $this;
    }
}
