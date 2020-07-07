<?php

namespace LiveStyled;

use GuzzleHttp\Exception\BadResponseException;
use LiveStyled\Exception\EntityCreationException;
use LiveStyled\Exception\EntityFetchException;

abstract class ServiceClient
{
    const DEFAULT_SCHEME = 'https://';
    protected $domain;

    protected $credentials;

    /**
     * @var \GuzzleHttp\Client
     */
    protected $httpClient;

    public function __construct($domain, $credentials, $scheme = null, $timeout = 2000.0)
    {
        $scheme            = $scheme ?? self::DEFAULT_SCHEME;
        $this->domain      = $this->addScheme($domain, $scheme);
        $this->credentials = $credentials;
        $this->httpClient  = new \GuzzleHttp\Client([
            'base_uri' => rtrim($this->domain, '/'),
            'timeout' => $timeout
        ]);
    }

    abstract protected function getPath();

    abstract public static function getModel();

    function addScheme($domain, $scheme)
    {
        return parse_url($domain, PHP_URL_SCHEME) === null ?
            $scheme . $domain : $domain;
    }

    /**
     * @param $data
     * @return array
     * @throws EntityCreationException
     */
    public function create($data)
    {
        try {
            $response = $this->httpClient->post($this->getPath(), [
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
     * @param $id
     * @param $data
     * @return array
     * @throws EntityCreationException
     */
    public function update($id, $data)
    {
        try {
            $response = $this->httpClient->patch($this->getPathWithId($id), [
                'body'    => json_encode($data),
                'headers' => $this->getHeaders(true),
            ]);
        } catch (BadResponseException $e) {
            throw new EntityCreationException($e->getMessage(), $e->getCode(), $e);
        }

        return json_decode($response->getBody()
                                    ->getContents(), true);
    }

    /**
     * @param       $id
     * @param array $filters
     * @return mixed
     * @throws EntityFetchException
     */
    public function find($id, $filters = [])
    {
        try {
            $response = $this->get($this->getPathWithId($id), $filters);
        } catch (BadResponseException $e) {
            throw new EntityFetchException($e->getMessage(), $e->getCode(), $e);
        }

        return json_decode($response->getBody()
                                    ->getContents(), true);
    }

    /**
     * @param array $filters
     * @param int   $pageSize
     * @param int   $page
     * @return array
     * @throws EntityFetchException
     */
    public function findAll($filters = [], $pageSize = 10, $page = 1)
    {
        try {
            $response = $this->get($this->getPath(), array_merge(compact('pageSize', 'page'), $filters));
        } catch (BadResponseException $e) {
            throw new EntityFetchException($e->getMessage(), $e->getCode(), $e);
        }

        return json_decode($response->getBody()
                                    ->getContents(), true);
    }

    /**
     * @param bool $patch
     * @return array
     */
    protected function getHeaders($patch = false): array
    {
        $headers = [
            'x-api-key'    => $this->credentials['api_key'],
            'content-type' => 'application/json'
        ];

        if ($patch) {
            $headers['content-type'] = 'application/merge-patch+json';
        }

        return $headers;
    }

    /**
     * @param $id
     * @return string
     */
    protected function getPathWithId($id): string
    {
        return $this->getPath() . '/' . $id;
    }

    /**
     * @param array $filters
     * @param int $pageSize
     * @param int $page
     * @return RealifeResult
     * @throws EntityFetchException
     */
    public function getCollection($filters = [], $pageSize = 2, $page = 1): RealifeResult
    {
        try {
            $response = $this->get($this->getPath(), array_merge(compact('pageSize', 'page'), $filters));
        } catch (BadResponseException $e) {
            throw new EntityFetchException($e->getMessage(), $e->getCode(), $e);
        }

        return $this->getRealifeResult($response);
    }

    public function getUniqueItem($resource, $params)
    {
        //todo need to implement
    }

    /**
     * @param $id
     * @param array $filters
     * @return Item
     * @throws EntityFetchException
     */
    public function getItem($id, $filters = [])
    {
        try {
            $response = $this->get($this->getPathWithId($id), $filters);
        } catch (BadResponseException $e) {
            throw new EntityFetchException($e->getMessage(), $e->getCode(), $e);
        }

        return $this->getItemResponse($response);
    }

    public function postCollection($resource, $data)
    {
        //todo need to implement
    }

    public function putItem($resource, $id)
    {
        //todo need to implement
    }

    public function patchItem($resource, $id)
    {
        //todo need to implement
    }

    public function deleteItem($resource, $id)
    {
        //todo need to implement
    }

    public function collectionOperation($resource, $method, $data)
    {
        //todo need to implement
    }

    public function itemOperation($resource, $action, $id)
    {
        //todo need to implement
    }

    /**
     * @param \Psr\Http\Message\ResponseInterface $response
     * @return RealifeResult
     */
    private function getRealifeResult(\Psr\Http\Message\ResponseInterface $response): RealifeResult
    {
        $response = $this->decodeResponse($response);
        $data = $response['hydra:member'] ?? [];
        $total = $response['hydra:totalItems'] ?? 0;

        $data = array_map(function ($item) {
            if (!$this->isResource($item)) {
                return null;
            }

            return $this->hydrateItem($item['@id'], $item['@type'], $item);
        }, $data);

        return new RealifeResult($data, $total);
    }

    private function hydrateItem(string $iri, string $type, array $responseItem): ?Item
    {
        $object = $this->resolveModel($type);
        $object->iri = $iri;
        $object->_type = $type;

        foreach ($responseItem as $property => $value) {
            if (is_array($value)) {
                $object->$property = $this->hydrateSubProperty($value);
            } else {
                $object->$property = $value;
            }
        }

        return $object;
    }

    /**
     * @param array $subProperty
     * @return Item
     */
    private function hydrateSubProperty(array $subProperty)
    {
        if (isset($subProperty[0])) {
            $property = $this->processArrayProperty($subProperty);
        } else {
           $property = $this->processProperty($subProperty);
        }

        return $property;
    }

    private function convertToSnakeCase(string $type)
    {
        return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $type));
    }

    /**
     * @param $type
     * @return Item
     */
    private function resolveModel($type): Item
    {
        $type = $this->convertToSnakeCase($type);

        if (isset(ServiceMap::SERVICE_MAP[$type])) {
            /**
             * @var $clientMapping self
             */
            $clientMapping = ServiceMap::SERVICE_MAP[$type];

            return $clientMapping::getModel();
        } else {
            return new Item();
        }
    }

    /**
     * @param \Psr\Http\Message\ResponseInterface $response
     * @return Item
     */
    private function getItemResponse(\Psr\Http\Message\ResponseInterface $response): Item
    {
        $response = $this->decodeResponse($response);

        return $this->hydrateItem($response['@id'], $response['@type'], $response);
    }

    /**
     * @param \Psr\Http\Message\ResponseInterface $response
     * @return mixed
     */
    private function decodeResponse(\Psr\Http\Message\ResponseInterface $response)
    {
        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @param $path
     * @param array $filters
     * @param array $headers
     * @return \Psr\Http\Message\ResponseInterface
     */
    private function get($path, array $filters, $headers = []): \Psr\Http\Message\ResponseInterface
    {
        return $this->httpClient->get($path, [
            'headers' => array_merge($this->getHeaders(), $headers),
            'query' => $filters
        ]);
    }

    private function isResource($item): bool
    {
        return isset($item['@id']);
    }

    /**
     * @param array $arrayProperty
     * @return array
     */
    private function processArrayProperty(array $arrayProperty): array
    {
        $property = [];

        foreach ($arrayProperty as $item) {
            if (!$this->isResource($item)) {
                $property[] = $item;
            } else {
                $property[] = $this->hydrateItem($item['@id'], $item['@type'], $item);
            }
        }

        return $property;
    }

    /**
     * @param array $subProperty
     * @return Item|null
     */
    private function processProperty(array $subProperty)
    {
        if (!$this->isResource($subProperty)) {
            return null;
        }

        return $this->hydrateItem($subProperty['@id'], $subProperty['@type'], $subProperty);
    }
}
