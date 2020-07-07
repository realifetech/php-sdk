<?php

namespace LiveStyled\User;

use GuzzleHttp\Exception\BadResponseException;
use LiveStyled\ServiceClient;
use LiveStyled\CrudClient;
use LiveStyled\Exception\EntityCreationException;

class UsersService extends ServiceClient implements CrudClient
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
            ->getContents());
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

    public static function getModel()
    {
        return new User();
    }
}
