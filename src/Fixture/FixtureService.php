<?php

namespace LiveStyled\Fixture;

use LiveStyled\ServiceClient;
use LiveStyled\CrudClient;

class FixtureService extends ServiceClient implements CrudClient
{
    protected function getPath()
    {
        return '/v4/fixtures';
    }

    public static function getModel()
    {
        return new Fixture();
    }
}
