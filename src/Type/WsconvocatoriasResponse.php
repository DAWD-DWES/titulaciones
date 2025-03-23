<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\ResultInterface;

class WsconvocatoriasResponse implements ResultInterface
{
    /**
     * @var null | \Clases\Type\ArrayOfClaseConvocatorias
     */
    private ?\Clases\Type\ArrayOfClaseConvocatorias $wsconvocatoriasResult = null;

    /**
     * @return null | \Clases\Type\ArrayOfClaseConvocatorias
     */
    public function getWsconvocatoriasResult() : ?\Clases\Type\ArrayOfClaseConvocatorias
    {
        return $this->wsconvocatoriasResult;
    }

    /**
     * @param null | \Clases\Type\ArrayOfClaseConvocatorias $wsconvocatoriasResult
     * @return static
     */
    public function withWsconvocatoriasResult(?\Clases\Type\ArrayOfClaseConvocatorias $wsconvocatoriasResult) : static
    {
        $new = clone $this;
        $new->wsconvocatoriasResult = $wsconvocatoriasResult;

        return $new;
    }
}

