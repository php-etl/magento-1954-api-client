<?php

namespace Kiboko\Magento\v2_4\Exception;

class SalesRuleRuleRepositoryV1SavePostInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal Server error');
    }
}