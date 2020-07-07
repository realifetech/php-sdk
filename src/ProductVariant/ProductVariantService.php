<?php


namespace LiveStyled\ProductVariant;


use LiveStyled\ServiceClient;

class ProductVariantService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/product_variants';
    }

    public static function getModel()
    {
        return new ProductVariant();
    }
}
