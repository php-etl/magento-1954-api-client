<?php

namespace Kiboko\Magento\v2_1\Exception;

class SalesInvoiceOrderV1ExecutePostUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
