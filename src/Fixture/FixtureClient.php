<?php

namespace LiveStyled\Fixture;

use LiveStyled\Client;
use LiveStyled\CrudClient;

class FixtureClient extends Client implements CrudClient
{
    protected function getPath()
    {
        return '/v4/fixtures';
    }
}