<?php


namespace LiveStyled\ProductCategory;


use LiveStyled\ServiceClient;

class ProductCategoryService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/product_categories';
    }

    public static function getModel()
    {
        return new ProductCategory();
    }
}
