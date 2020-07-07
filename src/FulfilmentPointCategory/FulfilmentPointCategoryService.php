<?php


namespace LiveStyled\FulfilmentPointCategory;


use LiveStyled\ServiceClient;

class FulfilmentPointCategoryService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/fulfilment_point_categories';
    }

    public static function getModel()
    {
        return new FulfilmentPointCategory();
    }
}
