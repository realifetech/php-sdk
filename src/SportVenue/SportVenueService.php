<?php

namespace LiveStyled\SportVenue;

use LiveStyled\ServiceClient;
use LiveStyled\CrudClient;

class SportVenueService extends ServiceClient implements CrudClient
{
    protected function getPath()
    {
        return '/v4/sport_venues';
    }

    public static function getModel()
    {
        return new SportVenue();
    }
}
