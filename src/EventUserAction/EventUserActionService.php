<?php


namespace LiveStyled\EventUserAction;


use LiveStyled\ServiceClient;

class EventUserActionService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/event_user_actions';
    }

    public static function getModel()
    {
        return new EventUserAction();
    }
}
