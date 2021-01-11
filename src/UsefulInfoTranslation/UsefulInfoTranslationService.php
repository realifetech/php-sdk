<?php


namespace LiveStyled\UsefulInfoTranslation;


use LiveStyled\ServiceClient;

class UsefulInfoTranslationService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/useful_info_translations';
    }

    public static function getModel()
    {
        return new UsefulInfoTranslation();
    }
}
