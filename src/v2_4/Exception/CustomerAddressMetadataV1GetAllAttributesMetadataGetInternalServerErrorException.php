<?php

namespace Kiboko\Magento\v2_4\Exception;

class CustomerAddressMetadataV1GetAllAttributesMetadataGetInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal Server error');
    }
}