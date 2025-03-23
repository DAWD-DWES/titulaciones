<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\ResultInterface;

class WsdptocenResponse implements ResultInterface
{
    /**
     * @var null | \Clases\Type\ArrayOfClaseDptoCen
     */
    private ?\Clases\Type\ArrayOfClaseDptoCen $wsdptocenResult = null;

    /**
     * @return null | \Clases\Type\ArrayOfClaseDptoCen
     */
    public function getWsdptocenResult() : ?\Clases\Type\ArrayOfClaseDptoCen
    {
        return $this->wsdptocenResult;
    }

    /**
     * @param null | \Clases\Type\ArrayOfClaseDptoCen $wsdptocenResult
     * @return static
     */
    public function withWsdptocenResult(?\Clases\Type\ArrayOfClaseDptoCen $wsdptocenResult) : static
    {
        $new = clone $this;
        $new->wsdptocenResult = $wsdptocenResult;

        return $new;
    }
}

