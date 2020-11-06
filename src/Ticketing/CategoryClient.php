<?php

namespace LiveStyled\Ticketing;

use LiveStyled\Client;
use LiveStyled\CrudClient;

class CategoryClient extends Client implements CrudClient
{
    protected function getPath()
    {
        return '/v4/ticketing/categories';
    }
}