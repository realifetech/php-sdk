<?php


namespace LiveStyled\WorkflowAction;


use LiveStyled\ServiceClient;

class WorkflowActionService extends ServiceClient
{

    protected function getPath()
    {
        return '/v4/workflow_actions';
    }

    public static function getModel()
    {
        return new WorkflowAction();
    }
}
