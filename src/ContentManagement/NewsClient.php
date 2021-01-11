<?php


namespace LiveStyled\ContentManagement;

use LiveStyled\Client;
use LiveStyled\CrudClient;

class NewsClient extends Client implements CrudClient
{
    protected function getPath()
    {
        return '/v4/content_management/news';
    }
}
