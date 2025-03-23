<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\ResultInterface;

class WstitulospropiosuniResponse implements ResultInterface
{
    /**
     * @var null | \Clases\Type\ArrayOfClaseTitulosPropiosUni
     */
    private ?\Clases\Type\ArrayOfClaseTitulosPropiosUni $wstitulospropiosuniResult = null;

    /**
     * @return null | \Clases\Type\ArrayOfClaseTitulosPropiosUni
     */
    public function getWstitulospropiosuniResult() : ?\Clases\Type\ArrayOfClaseTitulosPropiosUni
    {
        return $this->wstitulospropiosuniResult;
    }

    /**
     * @param null | \Clases\Type\ArrayOfClaseTitulosPropiosUni $wstitulospropiosuniResult
     * @return static
     */
    public function withWstitulospropiosuniResult(?\Clases\Type\ArrayOfClaseTitulosPropiosUni $wstitulospropiosuniResult) : static
    {
        $new = clone $this;
        $new->wstitulospropiosuniResult = $wstitulospropiosuniResult;

        return $new;
    }
}

