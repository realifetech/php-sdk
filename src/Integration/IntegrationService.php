<?php


namespace LiveStyled\Integration;


use LiveStyled\ServiceClient;

class IntegrationService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/integrations';
    }

    public static function getModel()
    {
        return new Integration();
    }
}
