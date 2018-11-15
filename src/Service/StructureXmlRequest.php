<?php

namespace Pau\Seur\Service;

 use Pau\Seur\Model\LabelRequest;

 class StructureXmlRequest
{
    private $xml;

     /**
      * StructureXmlRequest constructor.
      */
     public function __construct()
    {
        $this->xml = __DIR__."xml/seur.xml";
    }

     /**
      * @param LabelRequest $label
      * @return string
      */
     function toParse(LabelRequest $label)
    {
        $dataxml = array(
            "{USER}" => $label->getUser() ,
            "{PASSWORD}" => $label->getPassword() ,
            "{BRAND}" => $label->getBrand() ,
            "{MODEL}" => $label->getModel() ,
            "{FORMATLABEL}" => $label->getFormat() ,
            "{INTEGRATIONCODE}" => $label->getPackage()->getIntegrationCode() ,
            "{NIF}" => $label->getClient()->getNif(),
            "{ACCOUNTINGCODE}" => $label->getPackage()->getAccountingCode() ,
            "{SERVICE}" => $label->getPackage()->getService() ,
            "{PRODUCTS}" =>$label->getPackage()->getProducts() ,
            "{TOTALPACKAGES}" =>$label->getPackage()->getTotalPackages() ,
            "{KILOS}" =>$label->getPackage()->getKilos() ,
            "{WEIGHT}" =>$label->getPackage()->getWeight() ,
            "{OBSERVATIONS}" =>$label->getPackage()->getObservations() ,
            "{EXPEDITIONREF}" => $label->getPackage()->getExpeditionRef() ,
            "{REFPACKAGES}" =>$label->getPackage()->getRefPackages() ,
            "{KEY}" => $label->getPackage()->getKey(),
            "{KEYVALUE}" => $label->getPackage()->getKeyValue(),
            "{REFUNDKEY}" => $label->getPackage()->getRefundKey(),
            "{REFUNDVALUE}" => $label->getPackage()->getRefundValue(),
            "{FULLNAME}" =>$label->getClient()->getFullName(),
            "{STREET}" => $label->getClient()->getStreet(),
            "{TYPESTREET}" =>$label->getClient()->getTypeStreet(),
            "{STREETNUMBER}" =>$label->getClient()->getStreetNumber() ,
            "{STREETNUMBER1}" =>$label->getClient()->getStreetNumber1() ,
            "{STAIRS}" => $label->getClient()->getStairs() ,
            "{FLOOR}" => $label->getClient()->getFloor() ,
            "{DOOR}" => $label->getClient()->getDoor() ,
            "{TOWN}" => $label->getClient()->getTown() ,
            "{POSTALCODE}" => $label->getClient()->getPostalCode(),
            "{CODECOUNTRY}" => $label->getClient()->getCodeCountry() ,
            "{EMAIL}" => $label->getClient()->getEmail() ,
            "{PHONE}" => $label->getClient()->getPhone(),
            "{FRANCHISECODE}" =>$label->getPackage()->getFranchiseCode(),
            "{WEBSERVICE}" => $label->getPackage()->getWebservice()
        );

        return strtr($this->xml, $dataxml);

    }

}