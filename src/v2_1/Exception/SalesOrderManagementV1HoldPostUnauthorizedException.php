<?php

namespace Kiboko\Magento\v2_1\Exception;

class SalesOrderManagementV1HoldPostUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}