<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\ResultInterface;

class WsdatosasigResponse implements ResultInterface
{
    /**
     * @var null | \Clases\Type\ArrayOfClaseDatosAsig
     */
    private ?\Clases\Type\ArrayOfClaseDatosAsig $wsdatosasigResult = null;

    /**
     * @return null | \Clases\Type\ArrayOfClaseDatosAsig
     */
    public function getWsdatosasigResult() : ?\Clases\Type\ArrayOfClaseDatosAsig
    {
        return $this->wsdatosasigResult;
    }

    /**
     * @param null | \Clases\Type\ArrayOfClaseDatosAsig $wsdatosasigResult
     * @return static
     */
    public function withWsdatosasigResult(?\Clases\Type\ArrayOfClaseDatosAsig $wsdatosasigResult) : static
    {
        $new = clone $this;
        $new->wsdatosasigResult = $wsdatosasigResult;

        return $new;
    }
}

