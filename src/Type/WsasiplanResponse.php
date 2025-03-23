<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\ResultInterface;

class WsasiplanResponse implements ResultInterface
{
    /**
     * @var null | \Clases\Type\ArrayOfClaseAsiPlan
     */
    private ?\Clases\Type\ArrayOfClaseAsiPlan $wsasiplanResult = null;

    /**
     * @return null | \Clases\Type\ArrayOfClaseAsiPlan
     */
    public function getWsasiplanResult() : ?\Clases\Type\ArrayOfClaseAsiPlan
    {
        return $this->wsasiplanResult;
    }

    /**
     * @param null | \Clases\Type\ArrayOfClaseAsiPlan $wsasiplanResult
     * @return static
     */
    public function withWsasiplanResult(?\Clases\Type\ArrayOfClaseAsiPlan $wsasiplanResult) : static
    {
        $new = clone $this;
        $new->wsasiplanResult = $wsasiplanResult;

        return $new;
    }
}

