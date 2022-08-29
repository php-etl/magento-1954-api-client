<?php

namespace Kiboko\Magento\v2_2\Exception;

class CatalogProductAttributeMediaGalleryManagementV1CreatePostUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
