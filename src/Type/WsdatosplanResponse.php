<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\ResultInterface;

class WsdatosplanResponse implements ResultInterface
{
    /**
     * @var null | \Clases\Type\ArrayOfClaseDatosPlan
     */
    private ?\Clases\Type\ArrayOfClaseDatosPlan $wsdatosplanResult = null;

    /**
     * @return null | \Clases\Type\ArrayOfClaseDatosPlan
     */
    public function getWsdatosplanResult() : ?\Clases\Type\ArrayOfClaseDatosPlan
    {
        return $this->wsdatosplanResult;
    }

    /**
     * @param null | \Clases\Type\ArrayOfClaseDatosPlan $wsdatosplanResult
     * @return static
     */
    public function withWsdatosplanResult(?\Clases\Type\ArrayOfClaseDatosPlan $wsdatosplanResult) : static
    {
        $new = clone $this;
        $new->wsdatosplanResult = $wsdatosplanResult;

        return $new;
    }
}

