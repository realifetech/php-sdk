<?php


namespace LiveStyled\Workflow;


use LiveStyled\ServiceClient;

class WorkflowService extends ServiceClient
{

    protected function getPath()
    {
        return '/v4/workflows';
    }

    public static function getModel()
    {
        return new Workflow();
    }
}
