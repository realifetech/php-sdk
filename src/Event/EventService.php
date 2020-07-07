<?php

namespace LiveStyled\Event;

use LiveStyled\ServiceClient;
use LiveStyled\CrudClient;
use LiveStyled\RealifeResult;

/**
 * Class EventClient
 * @package LiveStyled\Event
 *
 * @method RealifeResult getCollection($resource)
 */
class EventService extends ServiceClient implements CrudClient
{
    protected function getPath()
    {
        return '/v4/events';
    }

    public static function getModel()
    {
        return new Event();
    }
}
