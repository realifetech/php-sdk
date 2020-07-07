<?php


namespace LiveStyled\SocialMediaTranslation;


use LiveStyled\ServiceClient;

class SocialMediaTranslationService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/social_media_translations';
    }

    public static function getModel()
    {
        return new SocialMediaTranslation();
    }
}
