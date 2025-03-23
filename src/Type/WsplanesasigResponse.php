<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\ResultInterface;

class WsplanesasigResponse implements ResultInterface
{
    /**
     * @var null | \Clases\Type\ArrayOfClasePlanesAsig
     */
    private ?\Clases\Type\ArrayOfClasePlanesAsig $wsplanesasigResult = null;

    /**
     * @return null | \Clases\Type\ArrayOfClasePlanesAsig
     */
    public function getWsplanesasigResult() : ?\Clases\Type\ArrayOfClasePlanesAsig
    {
        return $this->wsplanesasigResult;
    }

    /**
     * @param null | \Clases\Type\ArrayOfClasePlanesAsig $wsplanesasigResult
     * @return static
     */
    public function withWsplanesasigResult(?\Clases\Type\ArrayOfClasePlanesAsig $wsplanesasigResult) : static
    {
        $new = clone $this;
        $new->wsplanesasigResult = $wsplanesasigResult;

        return $new;
    }
}

