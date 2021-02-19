<?php

namespace LiveStyled\EventManagement;

use LiveStyled\Client;
use LiveStyled\CrudClient;

class VenueClient extends Client implements CrudClient
{
    protected function getPath()
    {
        return '/v4/event_management/venues';
    }
}
