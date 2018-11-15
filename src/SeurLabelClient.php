<?php

namespace Pau\Seur;

use Pau\Seur\Model\LabelRequest;
use Pau\Seur\Request\SeurRequest;

class SeurLabelClient
{

    public function seurRequest(LabelRequest $label)
    {
        $seurRequest=new SeurRequest();
        $seurRequest->request($label);
    }

}