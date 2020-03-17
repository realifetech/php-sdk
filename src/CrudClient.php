<?php

namespace LiveStyled;

interface CrudClient
{
    public function create($data);

    public function update($id, $data);

    public function find($id, $filters = []);

    public function findAll($filters = [], $pageSize = 10, $offset = 0);
}
