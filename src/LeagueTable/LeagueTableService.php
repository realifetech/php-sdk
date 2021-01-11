<?php


namespace LiveStyled\LeagueTable;


use LiveStyled\ServiceClient;

class LeagueTableService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/league_tables';
    }

    public static function getModel()
    {
        return new LeagueTable();
    }
}
