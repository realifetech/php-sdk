<?php


namespace LiveStyled\UsefulInfo;


use LiveStyled\ServiceClient;

class UsefulInfoService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/useful_infos';
    }

    public static function getModel()
    {
        return new UsefulInfo();
    }
}
