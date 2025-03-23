<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\ResultInterface;

class WsasideptoResponse implements ResultInterface
{
    /**
     * @var null | \Clases\Type\ArrayOfClaseAsiDepto
     */
    private ?\Clases\Type\ArrayOfClaseAsiDepto $wsasideptoResult = null;

    /**
     * @return null | \Clases\Type\ArrayOfClaseAsiDepto
     */
    public function getWsasideptoResult() : ?\Clases\Type\ArrayOfClaseAsiDepto
    {
        return $this->wsasideptoResult;
    }

    /**
     * @param null | \Clases\Type\ArrayOfClaseAsiDepto $wsasideptoResult
     * @return static
     */
    public function withWsasideptoResult(?\Clases\Type\ArrayOfClaseAsiDepto $wsasideptoResult) : static
    {
        $new = clone $this;
        $new->wsasideptoResult = $wsasideptoResult;

        return $new;
    }
}

