<?php

namespace LiveStyled\Integration;

use GuzzleHttp\Exception\BadResponseException;
use LiveStyled\Client;
use LiveStyled\CrudClient;
use LiveStyled\Exception\EntityFetchException;

class IntegrationsClient extends Client implements CrudClient
{
    protected function getPath()
    {
        return '/v4/integration/integrations';
    }

    /**
     * @param string $type
     * @param array $payload
     * @return mixed
     * @throws EntityFetchException
     */
    public function runByType(string $type, array $payload)
    {
        try {
            $response = $this->httpClient->post($this->getPathByType($type), [
                'body'    => json_encode($payload),
                'headers' => $this->getHeaders()
            ]);
        } catch (BadResponseException $e) {
            throw new EntityFetchException($e->getMessage(), $e->getCode(), $e);
        }

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @param string $type
     * @return string
     */
    private function getPathByType(string $type)
    {
        return $this->getPath().'/run_by_type/'.$type;
    }
}
