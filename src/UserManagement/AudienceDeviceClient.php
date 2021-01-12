<?php


namespace LiveStyled\UserManagement;

use LiveStyled\CrudClient;
use LiveStyled\RelationClient;

class AudienceDeviceClient extends RelationClient implements CrudClient
{
    protected function getPath()
    {
        return '/v4/user_management/audience_devices';
    }
}
