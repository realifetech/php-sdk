<?php

namespace LiveStyled\Sell;

use LiveStyled\Client;
use LiveStyled\CrudClient;

class ProductClient extends Client implements CrudClient
{
    protected function getPath()
    {
        return '/v4/sell/products';
    }
}
