<?php

namespace Kiboko\Magento\V2_2\Model;

class V1SharedCatalogSharedCatalogIdAssignCompaniesPostBody
{
    /**
     *
     *
     * @var CompanyDataCompanyInterface[]
     */
    protected $companies;
    /**
     *
     *
     * @return CompanyDataCompanyInterface[]
     */
    public function getCompanies(): array
    {
        return $this->companies;
    }
    /**
     *
     *
     * @param CompanyDataCompanyInterface[] $companies
     *
     * @return self
     */
    public function setCompanies(array $companies): self
    {
        $this->companies = $companies;
        return $this;
    }
}