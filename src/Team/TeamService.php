<?php

namespace LiveStyled\Team;

use LiveStyled\ServiceClient;
use LiveStyled\CrudClient;

class TeamService extends ServiceClient implements CrudClient
{
    protected function getPath()
    {
        return '/v4/teams';
    }

    public static function getModel()
    {
        return new Team();
    }
}
