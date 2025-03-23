<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\ResultInterface;

class WsareasdptoResponse implements ResultInterface
{
    /**
     * @var null | \Clases\Type\ArrayOfClaseAreasDpto
     */
    private ?\Clases\Type\ArrayOfClaseAreasDpto $wsareasdptoResult = null;

    /**
     * @return null | \Clases\Type\ArrayOfClaseAreasDpto
     */
    public function getWsareasdptoResult() : ?\Clases\Type\ArrayOfClaseAreasDpto
    {
        return $this->wsareasdptoResult;
    }

    /**
     * @param null | \Clases\Type\ArrayOfClaseAreasDpto $wsareasdptoResult
     * @return static
     */
    public function withWsareasdptoResult(?\Clases\Type\ArrayOfClaseAreasDpto $wsareasdptoResult) : static
    {
        $new = clone $this;
        $new->wsareasdptoResult = $wsareasdptoResult;

        return $new;
    }
}

