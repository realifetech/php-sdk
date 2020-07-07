<?php

namespace LiveStyled\Venue;

use LiveStyled\ServiceClient;
use LiveStyled\CrudClient;

class VenueService extends ServiceClient implements CrudClient
{
    protected function getPath()
    {
        return '/v4/venues';
    }

    public static function getModel()
    {
        return new Venue();
    }
}
