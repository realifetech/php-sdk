<?php


namespace LiveStyled\EventDate;


use LiveStyled\ServiceClient;

class EventDateService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/event_dates';
    }

    public static function getModel()
    {
        return new EventDate();
    }
}
