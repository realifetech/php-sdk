<?php

namespace LiveStyled\News;

use LiveStyled\ServiceClient;
use LiveStyled\CrudClient;

class NewsService extends ServiceClient implements CrudClient
{
    protected function getPath()
    {
        return '/v4/news';
    }

    public static function getModel()
    {
        return new News();
    }
}
