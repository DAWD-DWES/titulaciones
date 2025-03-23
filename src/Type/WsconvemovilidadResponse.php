<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\ResultInterface;

class WsconvemovilidadResponse implements ResultInterface
{
    /**
     * @var null | \Clases\Type\ArrayOfClaseConveMovilidad
     */
    private ?\Clases\Type\ArrayOfClaseConveMovilidad $wsconvemovilidadResult = null;

    /**
     * @return null | \Clases\Type\ArrayOfClaseConveMovilidad
     */
    public function getWsconvemovilidadResult() : ?\Clases\Type\ArrayOfClaseConveMovilidad
    {
        return $this->wsconvemovilidadResult;
    }

    /**
     * @param null | \Clases\Type\ArrayOfClaseConveMovilidad $wsconvemovilidadResult
     * @return static
     */
    public function withWsconvemovilidadResult(?\Clases\Type\ArrayOfClaseConveMovilidad $wsconvemovilidadResult) : static
    {
        $new = clone $this;
        $new->wsconvemovilidadResult = $wsconvemovilidadResult;

        return $new;
    }
}

