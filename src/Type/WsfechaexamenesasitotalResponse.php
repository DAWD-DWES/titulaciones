<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\ResultInterface;

class WsfechaexamenesasitotalResponse implements ResultInterface
{
    /**
     * @var null | \Clases\Type\ArrayOfClaseFechaExamenesAsiTotal
     */
    private ?\Clases\Type\ArrayOfClaseFechaExamenesAsiTotal $wsfechaexamenesasitotalResult = null;

    /**
     * @return null | \Clases\Type\ArrayOfClaseFechaExamenesAsiTotal
     */
    public function getWsfechaexamenesasitotalResult() : ?\Clases\Type\ArrayOfClaseFechaExamenesAsiTotal
    {
        return $this->wsfechaexamenesasitotalResult;
    }

    /**
     * @param null | \Clases\Type\ArrayOfClaseFechaExamenesAsiTotal $wsfechaexamenesasitotalResult
     * @return static
     */
    public function withWsfechaexamenesasitotalResult(?\Clases\Type\ArrayOfClaseFechaExamenesAsiTotal $wsfechaexamenesasitotalResult) : static
    {
        $new = clone $this;
        $new->wsfechaexamenesasitotalResult = $wsfechaexamenesasitotalResult;

        return $new;
    }
}

