<?php

namespace Kiboko\Magento\v2_2\Exception;

class CustomerAccountManagementV1ValidateResetPasswordLinkTokenGetBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('400 Bad Request');
    }
}
