<?php

namespace Kiboko\Magento\v2_4\Exception;

class CustomerCustomerGroupConfigV1SetDefaultCustomerGroupPutInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal Server error');
    }
}