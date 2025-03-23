<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\ResultInterface;

class WscalificacionesResponse implements ResultInterface
{
    /**
     * @var null | \Clases\Type\ArrayOfClaseCalificaciones
     */
    private ?\Clases\Type\ArrayOfClaseCalificaciones $wscalificacionesResult = null;

    /**
     * @return null | \Clases\Type\ArrayOfClaseCalificaciones
     */
    public function getWscalificacionesResult() : ?\Clases\Type\ArrayOfClaseCalificaciones
    {
        return $this->wscalificacionesResult;
    }

    /**
     * @param null | \Clases\Type\ArrayOfClaseCalificaciones $wscalificacionesResult
     * @return static
     */
    public function withWscalificacionesResult(?\Clases\Type\ArrayOfClaseCalificaciones $wscalificacionesResult) : static
    {
        $new = clone $this;
        $new->wscalificacionesResult = $wscalificacionesResult;

        return $new;
    }
}

