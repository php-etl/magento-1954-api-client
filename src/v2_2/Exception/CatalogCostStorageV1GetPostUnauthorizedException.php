<?php

namespace Kiboko\Magento\v2_2\Exception;

class CatalogCostStorageV1GetPostUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
