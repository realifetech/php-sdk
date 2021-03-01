<?php

namespace LiveStyled\Sell;

use LiveStyled\Client;
use LiveStyled\CrudClient;

class ProductModifierItemClient extends Client implements CrudClient
{
    protected function getPath()
    {
        return '/v4/sell/product_modifier_items';
    }
}
