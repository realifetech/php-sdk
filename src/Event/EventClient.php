<?php

namespace LiveStyled\Event;

use LiveStyled\Client;
use LiveStyled\CrudClient;

class EventClient extends Client implements CrudClient
{
    protected function getPath()
    {
        return '/v4/events';
    }
}
