<?php

namespace Pau\Seur\Request;

use Pau\Seur\Model\LabelRequest;
use Pau\Seur\Service\StructureXmlRequest;

class SeurRequest
{
    CONST URL_LABEL_SEUR = "http://cit.seur.com/CIT-war/services/ImprimirECBWebService?wsdl.com";

    /**
     * @param LabelRequest $label
     */
    public function request(LabelRequest $label){

       $request= new StructureXmlRequest();
       $labelXml=$request->toParse($label);

    }

}