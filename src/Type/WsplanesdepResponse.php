<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\ResultInterface;

class WsplanesdepResponse implements ResultInterface
{
    /**
     * @var null | \Clases\Type\ArrayOfClasePlanesDep
     */
    private ?\Clases\Type\ArrayOfClasePlanesDep $wsplanesdepResult = null;

    /**
     * @return null | \Clases\Type\ArrayOfClasePlanesDep
     */
    public function getWsplanesdepResult() : ?\Clases\Type\ArrayOfClasePlanesDep
    {
        return $this->wsplanesdepResult;
    }

    /**
     * @param null | \Clases\Type\ArrayOfClasePlanesDep $wsplanesdepResult
     * @return static
     */
    public function withWsplanesdepResult(?\Clases\Type\ArrayOfClasePlanesDep $wsplanesdepResult) : static
    {
        $new = clone $this;
        $new->wsplanesdepResult = $wsplanesdepResult;

        return $new;
    }
}

