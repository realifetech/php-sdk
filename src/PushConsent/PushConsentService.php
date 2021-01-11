<?php


namespace LiveStyled\PushConsent;


use LiveStyled\ServiceClient;

class PushConsentService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/push_consents';
    }

    public static function getModel()
    {
        return new PushConsent();
    }
}
