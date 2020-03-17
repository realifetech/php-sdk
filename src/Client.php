<?php

namespace LiveStyled;

abstract class Client
{
    protected $domain;
    protected $credentials;

    /**
     * @var \GuzzleHttp\Client
     */
    protected $httpClient;

    public function __construct($domain, $credentials)
    {
        $this->domain = $domain;
        $this->credentials = $credentials;
        $this->httpClient = new \GuzzleHttp\Client(['base_uri' => rtrim($this->domain, '/'), 'timeout'  => 2.0]);
    }
}
