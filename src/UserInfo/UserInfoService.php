<?php


namespace LiveStyled\UserInfo;


use LiveStyled\ServiceClient;

class UserInfoService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/user_infos';
    }

    public static function getModel()
    {
        return new UserInfo();
    }
}
