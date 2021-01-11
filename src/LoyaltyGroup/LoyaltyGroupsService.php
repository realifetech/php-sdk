<?php

namespace LiveStyled\LoyaltyGroup;

use GuzzleHttp\Exception\BadResponseException;
use LiveStyled\ServiceClient;
use LiveStyled\CrudClient;
use LiveStyled\Exception\EntityCreationException;

class LoyaltyGroupsService extends ServiceClient implements CrudClient
{
    protected function getPath()
    {
        return '/v4/loyalty_groups';
    }

    /**
     * @param $data
     * @return mixed
     * @throws EntityCreationException
     * @throws \GuzzleHttp\Exception\GuzzleException
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

    public static function getModel()
    {
        return new LoyaltyGroup();
    }
}
