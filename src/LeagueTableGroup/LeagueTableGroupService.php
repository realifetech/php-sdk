<?php


namespace LiveStyled\LeagueTableGroup;


use LiveStyled\ServiceClient;

class LeagueTableGroupService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/league_table_groups';
    }

    public static function getModel()
    {
        return new LeagueTableGroup();
    }
}
