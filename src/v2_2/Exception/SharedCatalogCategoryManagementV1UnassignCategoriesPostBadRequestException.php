<?php

namespace Kiboko\Magento\v2_2\Exception;

class SharedCatalogCategoryManagementV1UnassignCategoriesPostBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('400 Bad Request');
    }
}