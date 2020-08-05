<?php


namespace LiveStyled\UserManagement;

use LiveStyled\Client;
use LiveStyled\CrudClient;

class UserClient extends Client implements CrudClient
{
    protected function getPath()
    {
        return '/v4/user_management/users';
    }
}
