<?php

namespace LiveStyled;

use LiveStyled\Exception\TransferException;

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
     *
     * @return array
     * @throws TransferException
     */
    public function findAll($filters = [], $pageSize = 10, $page = 0): array;
}