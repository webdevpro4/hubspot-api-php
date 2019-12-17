<?php

namespace HubSpot\Factory;

use GuzzleHttp\Client;
use HubSpot\Client\Crm\Owners\Api\DefaultApi;
use HubSpot\Client\Crm\Owners\Configuration;

/**
 * @method DefaultApi defaultApi()
 */
class Owners
{
    /** @var Client */
    protected $client;

    /** @var Configuration */
    protected $config;

    public function __construct($client, $config)
    {
        $this->client = $client;
        $this->config = $config;
    }

    /**
     * @param string $name
     * @param mixed  $args
     *
     * @return mixed
     */
    public function __call($name, $args)
    {
        $resource = '\\HubSpot\\Client\\Crm\\Owners\\Api\\'.ucfirst($name);

        return new $resource($this->client, $this->config);
    }
}
