<?php

namespace LiveStyled\Event;

use LiveStyled\Client;
use LiveStyled\CrudClient;

class EventClient extends Client implements CrudClient
{
    public function create($data)
    {
    }

    public function update($id, $data)
    {
        // TODO: Implement update() method.
    }

    public function find($id, $filters = [])
    {
        // TODO: Implement find() method.
    }

    public function findAll($filters = [], $pageSize = 10, $page = 1)
    {
        $response = $this->httpClient->get(rtrim($this->domain, '/') . '/v4/events', [
                'headers' => ['x-api-key' => $this->credentials['api_key']],
                'query' => array_merge(compact('pageSize', 'page'), $filters)
            ]);

        var_dump($response);
    }
}
