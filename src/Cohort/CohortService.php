<?php


namespace LiveStyled\Cohort;


use LiveStyled\ServiceClient;

class CohortService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/cohorts';
    }

    public static function getModel()
    {
        return new Cohort();
    }
}
