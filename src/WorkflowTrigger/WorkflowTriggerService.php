<?php


namespace LiveStyled\WorkflowTrigger;


use LiveStyled\ServiceClient;

class WorkflowTriggerService extends ServiceClient
{

    protected function getPath()
    {
        return '/v4/workflow_triggers';
    }

    public static function getModel()
    {
        return new WorkflowTrigger();
    }
}
