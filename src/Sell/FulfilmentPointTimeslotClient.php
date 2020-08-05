<?php

namespace LiveStyled\Sell;

use LiveStyled\Client;
use LiveStyled\CrudClient;

class FulfilmentPointTimeslotClient extends Client implements CrudClient
{
    protected function getPath()
    {
        return '/v4/sell/fulfilment_point_timeslots';
    }
}