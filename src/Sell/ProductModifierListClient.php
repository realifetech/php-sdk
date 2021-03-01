<?php

namespace LiveStyled\Sell;

use LiveStyled\Client;
use LiveStyled\CrudClient;

class ProductModifierListClient extends Client implements CrudClient
{
    protected function getPath()
    {
        return '/v4/sell/product_modifier_lists';
    }
}
