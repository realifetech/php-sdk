<?php

namespace LiveStyled\Team;

use LiveStyled\Client;
use LiveStyled\CrudClient;

class TeamClient extends Client implements CrudClient
{
    protected function getPath()
    {
        return '/v4/teams';
    }
}