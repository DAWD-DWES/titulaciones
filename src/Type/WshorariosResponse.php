<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\ResultInterface;

class WshorariosResponse implements ResultInterface
{
    /**
     * @var null | \Clases\Type\ArrayOfClaseHorarios
     */
    private ?\Clases\Type\ArrayOfClaseHorarios $wshorariosResult = null;

    /**
     * @return null | \Clases\Type\ArrayOfClaseHorarios
     */
    public function getWshorariosResult() : ?\Clases\Type\ArrayOfClaseHorarios
    {
        return $this->wshorariosResult;
    }

    /**
     * @param null | \Clases\Type\ArrayOfClaseHorarios $wshorariosResult
     * @return static
     */
    public function withWshorariosResult(?\Clases\Type\ArrayOfClaseHorarios $wshorariosResult) : static
    {
        $new = clone $this;
        $new->wshorariosResult = $wshorariosResult;

        return $new;
    }
}

