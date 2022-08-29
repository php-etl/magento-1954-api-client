<?php

namespace Kiboko\Magento\v2_1\Exception;

class CatalogCategoryAttributeRepositoryV1GetGetUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
