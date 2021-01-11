<?php


namespace LiveStyled\TicketAuth;


use LiveStyled\ServiceClient;

class TicketAuthService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/ticket_auths';
    }

    public static function getModel()
    {
        return new TicketAuth();
    }
}
