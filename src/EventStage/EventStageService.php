<?php

namespace LiveStyled\EventStage;

use LiveStyled\ServiceClient;

class EventStageService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/event_stages';
    }

    public static function getModel()
    {
        return new EventStage();
    }
}
