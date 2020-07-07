<?php


namespace LiveStyled\Product;


use LiveStyled\ServiceClient;

class ProductService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/products';
    }

    public static function getModel()
    {
        return new Product();
    }
}
