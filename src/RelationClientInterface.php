<?php

namespace LiveStyled;

use LiveStyled\Exception\EntityFetchException;

interface RelationClientInterface
{
    /**
     * @param $data
     *
     * @return mixed
     */
    public function create($data);

    /**
     * @param array $filters
     * @param int   $pageSize
     * @param int   $page
     * @return array
     * @throws EntityFetchException
     */
    public function findAll($filters = [], $pageSize = 10, $page = 1);
}