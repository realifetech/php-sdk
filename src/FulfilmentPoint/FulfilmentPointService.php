<?php


namespace LiveStyled\FulfilmentPoint;


use LiveStyled\ServiceClient;

class FulfilmentPointService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/fulfilment_points';
    }

    public static function getModel()
    {
        return new FulfilmentPoint();
    }
}
