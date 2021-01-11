<?php

namespace LiveStyled\Sell;

use LiveStyled\Client;
use LiveStyled\CrudClient;

class FulfilmentPointCategoryClient extends Client implements CrudClient
{
    protected function getPath()
    {
        return '/v4/sell/fulfilment_point_categories';
    }
}
