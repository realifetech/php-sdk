<?php

namespace LiveStyled\Ticketing;

use LiveStyled\Client;
use LiveStyled\CrudClient;

class TariffClient extends Client implements CrudClient
{
    protected function getPath()
    {
        return '/v4/ticketing/tariffs';
    }
}