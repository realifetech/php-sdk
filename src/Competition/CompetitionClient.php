<?php

namespace LiveStyled\Competition;

use LiveStyled\Client;
use LiveStyled\CrudClient;

class CompetitionClient extends Client implements CrudClient
{
    protected function getPath()
    {
        return '/v4/competitions';
    }
}