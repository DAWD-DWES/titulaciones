<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\ResultInterface;

class Wsreqidiomab1planResponse implements ResultInterface
{
    /**
     * @var null | \Clases\Type\ClaseReqidiomab1plan
     */
    private ?\Clases\Type\ClaseReqidiomab1plan $wsreqidiomab1planResult = null;

    /**
     * @return null | \Clases\Type\ClaseReqidiomab1plan
     */
    public function getWsreqidiomab1planResult() : ?\Clases\Type\ClaseReqidiomab1plan
    {
        return $this->wsreqidiomab1planResult;
    }

    /**
     * @param null | \Clases\Type\ClaseReqidiomab1plan $wsreqidiomab1planResult
     * @return static
     */
    public function withWsreqidiomab1planResult(?\Clases\Type\ClaseReqidiomab1plan $wsreqidiomab1planResult) : static
    {
        $new = clone $this;
        $new->wsreqidiomab1planResult = $wsreqidiomab1planResult;

        return $new;
    }
}

