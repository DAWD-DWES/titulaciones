<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\ResultInterface;

class WstitulosuniResponse implements ResultInterface
{
    /**
     * @var null | \Clases\Type\ArrayOfClaseTitulosUni
     */
    private ?\Clases\Type\ArrayOfClaseTitulosUni $wstitulosuniResult = null;

    /**
     * @return null | \Clases\Type\ArrayOfClaseTitulosUni
     */
    public function getWstitulosuniResult() : ?\Clases\Type\ArrayOfClaseTitulosUni
    {
        return $this->wstitulosuniResult;
    }

    /**
     * @param null | \Clases\Type\ArrayOfClaseTitulosUni $wstitulosuniResult
     * @return static
     */
    public function withWstitulosuniResult(?\Clases\Type\ArrayOfClaseTitulosUni $wstitulosuniResult) : static
    {
        $new = clone $this;
        $new->wstitulosuniResult = $wstitulosuniResult;

        return $new;
    }
}

