<?php

namespace Kiboko\Magento\v2_2\Exception;

class RmaRmaManagementV1SaveRmaPutUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}