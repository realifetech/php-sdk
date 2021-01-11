<?php


namespace LiveStyled\DeviceToken;


use LiveStyled\ServiceClient;

class DeviceTokenService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/device_tokens';
    }

    public static function getModel()
    {
        return new DeviceToken();
    }
}
