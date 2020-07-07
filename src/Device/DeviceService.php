<?php


namespace LiveStyled\Device;


use LiveStyled\ServiceClient;

class DeviceService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/devices';
    }

    public static function getModel()
    {
        return new Device();
    }
}
