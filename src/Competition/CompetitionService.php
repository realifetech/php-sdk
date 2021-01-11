<?php

namespace LiveStyled\Competition;

use LiveStyled\ServiceClient;
use LiveStyled\CrudClient;

class CompetitionService extends ServiceClient implements CrudClient
{
    protected function getPath()
    {
        return '/v4/competitions';
    }

    public static function getModel()
    {
        return new Competition();
    }
}
