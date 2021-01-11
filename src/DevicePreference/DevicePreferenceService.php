<?php


namespace LiveStyled\DevicePreference;


use LiveStyled\ServiceClient;

class DevicePreferenceService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/device_preferences';
    }

    public static function getModel()
    {
        return new DevicePreference();
    }
}
