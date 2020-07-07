<?php


namespace LiveStyled\PushBroadcast;


use LiveStyled\ServiceClient;

class PushBroadcastService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/push_broadcasts';
    }

    public static function getModel()
    {
        return new PushBroadcast();
    }
}
