<?php


namespace LiveStyled\SocialMedia;


use LiveStyled\ServiceClient;

class SocialMediaService extends ServiceClient
{

    protected function getPath()
    {
        return '/v4/social_media';
    }

    public static function getModel()
    {
        return new SocialMedia();
    }
}
