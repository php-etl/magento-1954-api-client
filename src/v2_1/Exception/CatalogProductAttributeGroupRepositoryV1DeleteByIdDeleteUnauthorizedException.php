<?php

namespace Kiboko\Magento\v2_1\Exception;

class CatalogProductAttributeGroupRepositoryV1DeleteByIdDeleteUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
