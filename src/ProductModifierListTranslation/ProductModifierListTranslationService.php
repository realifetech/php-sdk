<?php


namespace LiveStyled\ProductModifierListTranslation;


use LiveStyled\ServiceClient;

class ProductModifierListTranslationService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/product_modifier_list_translations';
    }

    public static function getModel()
    {
        return new ProductModifierListTranslation();
    }
}
