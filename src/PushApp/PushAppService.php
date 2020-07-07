<?php


namespace LiveStyled\PushApp;


use LiveStyled\ServiceClient;

class PushAppService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/push_apps';
    }

    public static function getModel()
    {
        return new PushApp();
    }
}
