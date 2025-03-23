<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\ResultInterface;

class WsdptoasigResponse implements ResultInterface
{
    /**
     * @var null | \Clases\Type\ArrayOfClaseDptoAsig
     */
    private ?\Clases\Type\ArrayOfClaseDptoAsig $wsdptoasigResult = null;

    /**
     * @return null | \Clases\Type\ArrayOfClaseDptoAsig
     */
    public function getWsdptoasigResult() : ?\Clases\Type\ArrayOfClaseDptoAsig
    {
        return $this->wsdptoasigResult;
    }

    /**
     * @param null | \Clases\Type\ArrayOfClaseDptoAsig $wsdptoasigResult
     * @return static
     */
    public function withWsdptoasigResult(?\Clases\Type\ArrayOfClaseDptoAsig $wsdptoasigResult) : static
    {
        $new = clone $this;
        $new->wsdptoasigResult = $wsdptoasigResult;

        return $new;
    }
}

