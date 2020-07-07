<?php


namespace LiveStyled\ProductModifierList;


use LiveStyled\ServiceClient;

class ProductModifierListService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/product_modifier_lists';
    }

    public static function getModel()
    {
        return new ProductModifierList();
    }
}
