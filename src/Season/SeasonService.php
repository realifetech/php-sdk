<?php

namespace LiveStyled\Season;

use LiveStyled\ServiceClient;
use LiveStyled\CrudClient;

class SeasonService extends ServiceClient implements CrudClient
{
    protected function getPath()
    {
        return '/v4/seasons';
    }

    public static function getModel()
    {
        return new Season();
    }
}
