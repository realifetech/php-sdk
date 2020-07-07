<?php


namespace LiveStyled\MerchantCustomer;


use LiveStyled\ServiceClient;

class MerchantCustomerService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/merchant_customers';
    }

    public static function getModel()
    {
        return new MerchantCustomer();
    }
}
