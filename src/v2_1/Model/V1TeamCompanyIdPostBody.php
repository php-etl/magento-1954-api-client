<?php

namespace Kiboko\Magento\V2_1\Model;

class V1TeamCompanyIdPostBody
{
    /**
     * Team interface
     *
     * @var CompanyDataTeamInterface
     */
    protected $team;
    /**
     * Team interface
     *
     * @return CompanyDataTeamInterface
     */
    public function getTeam(): CompanyDataTeamInterface
    {
        return $this->team;
    }
    /**
     * Team interface
     *
     * @param CompanyDataTeamInterface $team
     *
     * @return self
     */
    public function setTeam(CompanyDataTeamInterface $team): self
    {
        $this->team = $team;
        return $this;
    }
}