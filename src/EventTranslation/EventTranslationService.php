<?php


namespace LiveStyled\EventTranslation;


use LiveStyled\ServiceClient;

class EventTranslationService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/event_translations';
    }

    public static function getModel()
    {
        return new EventTranslation();
    }
}
