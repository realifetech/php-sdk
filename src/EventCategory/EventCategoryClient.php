<?php

namespace LiveStyled\EventCategory;

use LiveStyled\Client;
use LiveStyled\CrudClient;

class EventCategoryClient extends Client implements CrudClient
{
    protected function getPath()
    {
        return '/v4/event_categories';
    }
}
