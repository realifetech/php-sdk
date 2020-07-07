<?php


namespace LiveStyled\EventActivity;


use LiveStyled\ServiceClient;

class EventActivityService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/event_activities';
    }

    public static function getModel()
    {
        return new EventActivity();
    }
}
