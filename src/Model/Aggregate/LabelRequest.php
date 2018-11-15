<?php

namespace Pau\Seur\Model\Aggregate;

use Pau\Seur\Model\Client;
use Pau\Seur\Model\Package;

class LabelRequest
{
    private $package;
    private $client;


    /**
     * LabelRequest constructor.
     * @param Package $package
     * @param Client $client
     */
    public function __construct(Package $package, Client $client)
    {
        $this->package = $package;
        $this->client = $client;
    }

    /**
     * @return Package
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

}