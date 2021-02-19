<?php

namespace LiveStyled;

use LogicException;

abstract class RelationClient extends Client
{
    /**
     * @param $id
     * @param $data
     *
     * @return void
     */
    public function update($id, $data)
    {
        throw new LogicException('Relation entry cannot be updated');
    }

    /**
     * @param       $id
     * @param array $filters
     *
     * @return mixed
     */
    public function find($id, $filters = [])
    {
        throw new LogicException('Relation entry cannot be found by id');
    }

}