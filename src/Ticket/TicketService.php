<?php


namespace LiveStyled\Ticket;


use LiveStyled\ServiceClient;

class TicketService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/tickets';
    }

    public static function getModel()
    {
        return new Ticket();
    }
}
