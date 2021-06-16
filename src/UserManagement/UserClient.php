<?php


namespace LiveStyled\UserManagement;

use GuzzleHttp\Exception\BadResponseException;
use LiveStyled\Client;
use LiveStyled\CrudClient;
use LiveStyled\Exception\EntityCreationException;

class UserClient extends Client implements CrudClient
{
    protected function getPath()
    {
        return '/v4/user_management/users';
    }

    public function register($data): array
    {
        try {
            $response = $this->httpClient->post(
                $this->getPath().'/register',
                [
                    'body' => json_encode($data),
                    'headers' => $this->getHeaders(),
                ]
            );
        } catch (BadResponseException $e) {
            throw new EntityCreationException($e->getMessage(), $e->getCode(), $e);
        }

        return json_decode($response->getBody()->getContents(), true);
    }

    public function authorise(int $id, $data): array
    {
        try {
            $response = $this->httpClient->post(
                $this->getPathWithId($id).'/authorise',
                [
                    'body' => json_encode($data),
                    'headers' => $this->getHeaders(),
                ]
            );
        } catch (BadResponseException $e) {
            throw new EntityCreationException($e->getMessage(), $e->getCode(), $e);
        }

        return json_decode($response->getBody()->getContents(), true);
    }
}
