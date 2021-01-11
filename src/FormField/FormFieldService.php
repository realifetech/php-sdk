<?php


namespace LiveStyled\FormField;


use LiveStyled\ServiceClient;

class FormFieldService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/form_fields';
    }

    public static function getModel()
    {
        return new FormField();
    }
}
