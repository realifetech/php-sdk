<?php

namespace LiveStyled\Ticketing;

use LiveStyled\Client;
use LiveStyled\CrudClient;

class TicketAuthClient extends Client implements CrudClient
{
    protected function getPath()
    {
        return '/v4/ticket_auths';
    }
}