<?php

namespace LiveStyled\Ticketing;

use LiveStyled\Client;
use LiveStyled\CrudClient;

class TicketClient extends Client implements CrudClient
{
    protected function getPath()
    {
        return '/v4/tickets';
    }
}
