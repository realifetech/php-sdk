<?php

namespace LiveStyled\Users;

use LiveStyled\Client;
use LiveStyled\CrudClient;

class UserSsosClient extends Client implements CrudClient
{
    protected function getPath()
    {
        return '/v4/user_ssos';
    }
}
