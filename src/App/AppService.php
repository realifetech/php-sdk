<?php


namespace LiveStyled\App;


use LiveStyled\ServiceClient;

class AppService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/apps';
    }

    public static function getModel()
    {
        return new App();
    }
}
