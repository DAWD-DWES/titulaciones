<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\ResultInterface;

class WsagrupacionesResponse implements ResultInterface
{
    /**
     * @var null | \Clases\Type\ArrayOfClaseAgrupaciones
     */
    private ?\Clases\Type\ArrayOfClaseAgrupaciones $wsagrupacionesResult = null;

    /**
     * @return null | \Clases\Type\ArrayOfClaseAgrupaciones
     */
    public function getWsagrupacionesResult() : ?\Clases\Type\ArrayOfClaseAgrupaciones
    {
        return $this->wsagrupacionesResult;
    }

    /**
     * @param null | \Clases\Type\ArrayOfClaseAgrupaciones $wsagrupacionesResult
     * @return static
     */
    public function withWsagrupacionesResult(?\Clases\Type\ArrayOfClaseAgrupaciones $wsagrupacionesResult) : static
    {
        $new = clone $this;
        $new->wsagrupacionesResult = $wsagrupacionesResult;

        return $new;
    }
}

