<?php

namespace LiveStyled\Season;

use LiveStyled\Client;
use LiveStyled\CrudClient;

class SeasonClient extends Client implements CrudClient
{
    protected function getPath()
    {
        return '/v4/seasons';
    }
}