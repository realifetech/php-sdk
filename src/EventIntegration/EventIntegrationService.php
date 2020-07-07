<?php


namespace LiveStyled\EventIntegration;


use LiveStyled\ServiceClient;

class EventIntegrationService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/event_integrations';
    }

    public static function getModel()
    {
        return new EventIntegration();
    }
}
