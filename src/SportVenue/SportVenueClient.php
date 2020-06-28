<?php

namespace LiveStyled\SportVenue;

use LiveStyled\Client;
use LiveStyled\CrudClient;

class SportVenueClient extends Client implements CrudClient
{
    protected function getPath()
    {
        return '/v4/sport_venues';
    }
}