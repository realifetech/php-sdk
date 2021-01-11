<?php


namespace LiveStyled\Order;


use LiveStyled\ServiceClient;

class OrderService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/orders';
    }

    public static function getModel()
    {
        return new Order();
    }
}
