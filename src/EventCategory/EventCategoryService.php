<?php

namespace LiveStyled\EventCategory;

use LiveStyled\ServiceClient;
use LiveStyled\CrudClient;

class EventCategoryService extends ServiceClient implements CrudClient
{
    protected function getPath()
    {
        return '/v4/event_categories';
    }

    public static function getModel()
    {
        return new EventCategory();
    }
}
