<?php

namespace Pau\Seur;

class SeurLabelClient
{
    CONST URL_LABEL_SEUR = "http://cit.seur.com/CIT-war/services/ImprimirECBWebService?wsdl.com";
    private $user;
    private $password;
    private $brand;
    private $model;
    private $format;


    /**
     * SeurLabelClient constructor.
     * @param string $user
     * @param string $password
     * @param string $brand
     * @param string $model
     * @param string $format
     */
    public function __construct(
        string $user ,
        string $password,
        string $brand,
        string $model,
        string $format
    )
    {
        $this->user =   $user;
        $this->password =   $password;
        $this->brand =  $brand;
        $this->model =  $model;
        $this->format=  $format;
    }

    public function labelRequest(
        $integrationCode,
        $nif,
        $accountingCode,
        $service,
        $products,
        $totalPackages,
        $kilos,
        $weight,
        $observations,
        $expeditionRef,
        $refPackages,
        $key,
        $keyValue=null,
        $refundKey,
        $refundValue,
        $fullName,
        $street,
        $typeStreet,
        $streetNumber,
        $streetNumber1=null,
        $stairs=null,
        $floor=null,
        $door=null,
        $town,
        $postalCode,
        $codeCountry,
        $email,
        $phone,
        $franchiseCode,
        $webservice
    )
    {

    }

}