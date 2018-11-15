<?php

namespace Pau\Seur\Request;

use Pau\Seur\Model\Aggregate\LabelRequest;

class SeurRequest
{
    CONST URL_LABEL_SEUR = "http://cit.seur.com/CIT-war/services/ImprimirECBWebService?wsdl.com";
    private $user;
    private $password;
    private $brand;
    private $model;
    private $format;

    /**
     * SeurRequest constructor.
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

    public function request(LabelRequest $label){



    }

}