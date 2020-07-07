<?php


namespace LiveStyled\Currency;


use LiveStyled\ServiceClient;

class CurrencyService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/currencies';
    }

    public static function getModel()
    {
        return new Currency();
    }
}
