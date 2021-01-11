<?php

namespace LiveStyled\User;

use LiveStyled\ServiceClient;
use LiveStyled\CrudClient;

class UserSsosService extends ServiceClient implements CrudClient
{
    protected function getPath()
    {
        return '/v4/user_ssos';
    }

    public static function getModel()
    {
        return new UserSso();
    }
}
