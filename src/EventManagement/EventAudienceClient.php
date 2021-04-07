<?php

namespace LiveStyled\EventManagement;

use LiveStyled\CrudClient;
use LiveStyled\RelationClient;

class EventAudienceClient extends RelationClient implements CrudClient
{
    protected function getPath()
    {
        return '/v4/event_management/event_audiences';
    }
}
