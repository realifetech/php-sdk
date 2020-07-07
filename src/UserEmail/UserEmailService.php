<?php


namespace LiveStyled\UserEmail;


use LiveStyled\ServiceClient;

class UserEmailService extends ServiceClient
{

    protected function getPath()
    {
        return '/v4/user_emails';
    }

    public static function getModel()
    {
        return new UserEmail();
    }
}
