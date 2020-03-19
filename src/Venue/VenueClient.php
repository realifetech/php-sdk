<?php

namespace LiveStyled\Venue;

use LiveStyled\Client;
use LiveStyled\CrudClient;

class VenueClient extends Client implements CrudClient
{
    protected function getPath()
    {
        return '/v4/venues';
    }
}
