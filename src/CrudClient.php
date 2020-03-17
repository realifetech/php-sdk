<?php

namespace LiveStyled;

use GuzzleHttp\Exception\TransferException;

interface CrudClient
{
    public function create($data);

    public function update($id, $data);

    public function find($id, $filters = []);

    /**
     * @param array $filters
     * @param int   $pageSize
     * @param int   $page
     * @throws TransferException
     */
    public function findAll($filters = [], $pageSize = 10, $page = 0);
}
