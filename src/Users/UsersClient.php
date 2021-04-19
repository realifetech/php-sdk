<?php

namespace LiveStyled\Users;

use GuzzleHttp\Exception\BadResponseException;
use LiveStyled\Client;
use LiveStyled\CrudClient;
use LiveStyled\Exception\EntityCreationException;

class UsersClient extends Client implements CrudClient
{
    protected function getPath()
    {
        return '/v4/users';
    }

    /**
     * @param $data
     * @return array
     * @throws EntityCreationException
     */
    public function register($data)
    {
        try {
            $response = $this->httpClient->post($this->getPath().'/register', [
                'body'    => json_encode($data),
                'headers' => $this->getHeaders(),
            ]);
        } catch (BadResponseException $e) {
            throw new EntityCreationException($e->getMessage(), $e->getCode(), $e);
        }

        return json_decode($response->getBody()
            ->getContents(), true);
    }

    /**
     * @param int $id
     * @param $data
     * @return array
     * @throws EntityCreationException
     */
    public function authorise(int $id, $data)
    {
        try {
            $response = $this->httpClient->post($this->getPathWithId($id).'/authorise', [
                'body'    => json_encode($data),
                'headers' => $this->getHeaders(),
            ]);
        } catch (BadResponseException $e) {
            throw new EntityCreationException($e->getMessage(), $e->getCode(), $e);
        }

        return json_decode($response->getBody()
            ->getContents(), true);
    }
}
