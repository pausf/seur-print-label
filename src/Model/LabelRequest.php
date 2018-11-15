<?php

namespace Pau\Seur\Model;

class LabelRequest
{
    private $package;
    private $client;
    private $user;
    private $password;
    private $brand;
    private $model;
    private $format;


    /**
     * LabelRequest constructor.
     * @param Package $package
     * @param Client $client
     * @param $user
     * @param $password
     * @param $brand
     * @param $model
     * @param $format
     */
    public function __construct(Package $package, Client $client, $user, $password, $brand, $model, $format)
    {
        $this->package = $package;
        $this->client = $client;
        $this->user = $user;
        $this->password = $password;
        $this->brand = $brand;
        $this->model = $model;
        $this->format = $format;
    }

    /**
     * @return Package
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * @param Package $package
     */
    public function setPackage($package)
    {
        $this->package = $package;
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param Client $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param mixed $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }


}