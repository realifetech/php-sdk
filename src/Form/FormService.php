<?php


namespace LiveStyled\Form;


use LiveStyled\ServiceClient;

class FormService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/forms';
    }

    public static function getModel()
    {
        return new Form();
    }
}
