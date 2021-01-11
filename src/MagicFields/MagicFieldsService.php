<?php

namespace LiveStyled\MagicFields;

use GuzzleHttp\Exception\BadResponseException;
use LiveStyled\ServiceClient;
use LiveStyled\CrudClient;
use LiveStyled\Exception\EntityFetchException;

class MagicFieldsService extends ServiceClient implements CrudClient
{
    protected function getPath()
    {
        return '/v4/magic_fields';
    }

    /**
     * @param int $userId
     * @param array $filters
     * @param int $pageSize
     * @param int $page
     * @return mixed
     * @throws EntityFetchException
     */
    public function findByUser(int $userId, $filters = [], $pageSize = 10, $page = 1)
    {
        try {
            $response = $this->httpClient->get($this->getPathByUser($userId), [
                'headers' => $this->getHeaders(),
                'query'   => array_merge(compact('pageSize', 'page'), $filters)
            ]);
        } catch (BadResponseException $e) {
            throw new EntityFetchException($e->getMessage(), $e->getCode(), $e);
        }

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @param int $userId
     * @return string
     */
    private function getPathByUser(int $userId)
    {
        return "/v4/users/".$userId."/magic_fields";
    }

    public static function getModel()
    {
        return new MagicField();
    }
}
