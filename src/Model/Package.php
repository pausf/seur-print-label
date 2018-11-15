<?php

namespace Pau\Seur\Model;

class Package extends LabelRequest
{
    private $integrationCode;
    private $service;
    private $products;
    private $totalPackages;
    private $kilos;
    private $weight;
    private $observations;
    private $expeditionRef;
    private $refPackages;
    private $key;
    private $accountingCode;
    private $keyValue;
    private $refundKey;
    private $refundValue;
    private $franchiseCode;
    private $webservice;

    /**
     * Package constructor.
     * @param $integrationCode
     * @param $service
     * @param $products
     * @param $totalPackages
     * @param $kilos
     * @param $weight
     * @param $observations
     * @param $expeditionRef
     * @param $refPackages
     * @param $key
     * @param $accountingCode
     * @param $keyValue
     * @param $refundKey
     * @param $refundValue
     * @param $franchiseCode
     * @param $webservice
     */
    public function __construct($integrationCode, $service, $products, $totalPackages, $kilos, $weight, $observations, $expeditionRef, $refPackages, $key, $accountingCode, $keyValue, $refundKey, $refundValue, $franchiseCode, $webservice)
    {
        $this->integrationCode = $integrationCode;
        $this->service = $service;
        $this->products = $products;
        $this->totalPackages = $totalPackages;
        $this->kilos = $kilos;
        $this->weight = $weight;
        $this->observations = $observations;
        $this->expeditionRef = $expeditionRef;
        $this->refPackages = $refPackages;
        $this->key = $key;
        $this->accountingCode = $accountingCode;
        $this->keyValue = $keyValue;
        $this->refundKey = $refundKey;
        $this->refundValue = $refundValue;
        $this->franchiseCode = $franchiseCode;
        $this->webservice = $webservice;
    }

    /**
     * @return mixed
     */
    public function getIntegrationCode()
    {
        return $this->integrationCode;
    }

    /**
     * @param mixed $integrationCode
     */
    public function setIntegrationCode($integrationCode)
    {
        $this->integrationCode = $integrationCode;
    }

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param mixed $service
     */
    public function setService($service)
    {
        $this->service = $service;
    }

    /**
     * @return mixed
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param mixed $products
     */
    public function setProducts($products)
    {
        $this->products = $products;
    }

    /**
     * @return mixed
     */
    public function getTotalPackages()
    {
        return $this->totalPackages;
    }

    /**
     * @param mixed $totalPackages
     */
    public function setTotalPackages($totalPackages)
    {
        $this->totalPackages = $totalPackages;
    }

    /**
     * @return mixed
     */
    public function getKilos()
    {
        return $this->kilos;
    }

    /**
     * @param mixed $kilos
     */
    public function setKilos($kilos)
    {
        $this->kilos = $kilos;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getObservations()
    {
        return $this->observations;
    }

    /**
     * @param mixed $observations
     */
    public function setObservations($observations)
    {
        $this->observations = $observations;
    }

    /**
     * @return mixed
     */
    public function getExpeditionRef()
    {
        return $this->expeditionRef;
    }

    /**
     * @param mixed $expeditionRef
     */
    public function setExpeditionRef($expeditionRef)
    {
        $this->expeditionRef = $expeditionRef;
    }

    /**
     * @return mixed
     */
    public function getRefPackages()
    {
        return $this->refPackages;
    }

    /**
     * @param mixed $refPackages
     */
    public function setRefPackages($refPackages)
    {
        $this->refPackages = $refPackages;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param mixed $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return mixed
     */
    public function getAccountingCode()
    {
        return $this->accountingCode;
    }

    /**
     * @param mixed $accountingCode
     */
    public function setAccountingCode($accountingCode)
    {
        $this->accountingCode = $accountingCode;
    }

    /**
     * @return mixed
     */
    public function getKeyValue()
    {
        return $this->keyValue;
    }

    /**
     * @param mixed $keyValue
     */
    public function setKeyValue($keyValue)
    {
        $this->keyValue = $keyValue;
    }

    /**
     * @return mixed
     */
    public function getRefundKey()
    {
        return $this->refundKey;
    }

    /**
     * @param mixed $refundKey
     */
    public function setRefundKey($refundKey)
    {
        $this->refundKey = $refundKey;
    }

    /**
     * @return mixed
     */
    public function getRefundValue()
    {
        return $this->refundValue;
    }

    /**
     * @param mixed $refundValue
     */
    public function setRefundValue($refundValue)
    {
        $this->refundValue = $refundValue;
    }

    /**
     * @return mixed
     */
    public function getFranchiseCode()
    {
        return $this->franchiseCode;
    }

    /**
     * @param mixed $franchiseCode
     */
    public function setFranchiseCode($franchiseCode)
    {
        $this->franchiseCode = $franchiseCode;
    }

    /**
     * @return mixed
     */
    public function getWebservice()
    {
        return $this->webservice;
    }

    /**
     * @param mixed $webservice
     */
    public function setWebservice($webservice)
    {
        $this->webservice = $webservice;
    }


}