<?php


namespace LiveStyled\ProductModifierItem;


use LiveStyled\ServiceClient;

class ProductModifierItemService extends ServiceClient
{

    protected function getPath()
    {
        return '/v4/product_modifier_items';
    }

    public static function getModel()
    {
        return new ProductModifierItem();
    }
}
