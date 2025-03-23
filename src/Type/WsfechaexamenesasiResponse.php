<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\ResultInterface;

class WsfechaexamenesasiResponse implements ResultInterface
{
    /**
     * @var null | \Clases\Type\ArrayOfClaseFechaExamenesAsi
     */
    private ?\Clases\Type\ArrayOfClaseFechaExamenesAsi $wsfechaexamenesasiResult = null;

    /**
     * @return null | \Clases\Type\ArrayOfClaseFechaExamenesAsi
     */
    public function getWsfechaexamenesasiResult() : ?\Clases\Type\ArrayOfClaseFechaExamenesAsi
    {
        return $this->wsfechaexamenesasiResult;
    }

    /**
     * @param null | \Clases\Type\ArrayOfClaseFechaExamenesAsi $wsfechaexamenesasiResult
     * @return static
     */
    public function withWsfechaexamenesasiResult(?\Clases\Type\ArrayOfClaseFechaExamenesAsi $wsfechaexamenesasiResult) : static
    {
        $new = clone $this;
        $new->wsfechaexamenesasiResult = $wsfechaexamenesasiResult;

        return $new;
    }
}

