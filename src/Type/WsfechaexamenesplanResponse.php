<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\ResultInterface;

class WsfechaexamenesplanResponse implements ResultInterface
{
    /**
     * @var null | \Clases\Type\ArrayOfClaseFechaExamenesPlan
     */
    private ?\Clases\Type\ArrayOfClaseFechaExamenesPlan $wsfechaexamenesplanResult = null;

    /**
     * @return null | \Clases\Type\ArrayOfClaseFechaExamenesPlan
     */
    public function getWsfechaexamenesplanResult() : ?\Clases\Type\ArrayOfClaseFechaExamenesPlan
    {
        return $this->wsfechaexamenesplanResult;
    }

    /**
     * @param null | \Clases\Type\ArrayOfClaseFechaExamenesPlan $wsfechaexamenesplanResult
     * @return static
     */
    public function withWsfechaexamenesplanResult(?\Clases\Type\ArrayOfClaseFechaExamenesPlan $wsfechaexamenesplanResult) : static
    {
        $new = clone $this;
        $new->wsfechaexamenesplanResult = $wsfechaexamenesplanResult;

        return $new;
    }
}

