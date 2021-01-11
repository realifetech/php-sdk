<?php


namespace LiveStyled\TicketIntegration;


use LiveStyled\ServiceClient;

class TicketIntegrationService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/ticket_integrations';
    }

    public static function getModel()
    {
        return new TicketIntegration();
    }
}
