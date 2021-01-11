<?php


namespace LiveStyled\ProductVariantStock;


use LiveStyled\ServiceClient;

class ProductVariantStockService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/product_variant_stocks';
    }

    public static function getModel()
    {
        return new ProductVariantStock();
    }
}
