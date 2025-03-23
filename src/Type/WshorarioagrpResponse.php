<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\ResultInterface;

class WshorarioagrpResponse implements ResultInterface
{
    /**
     * @var null | \Clases\Type\ArrayOfClaseHorarioAgrp
     */
    private ?\Clases\Type\ArrayOfClaseHorarioAgrp $wshorarioagrpResult = null;

    /**
     * @return null | \Clases\Type\ArrayOfClaseHorarioAgrp
     */
    public function getWshorarioagrpResult() : ?\Clases\Type\ArrayOfClaseHorarioAgrp
    {
        return $this->wshorarioagrpResult;
    }

    /**
     * @param null | \Clases\Type\ArrayOfClaseHorarioAgrp $wshorarioagrpResult
     * @return static
     */
    public function withWshorarioagrpResult(?\Clases\Type\ArrayOfClaseHorarioAgrp $wshorarioagrpResult) : static
    {
        $new = clone $this;
        $new->wshorarioagrpResult = $wshorarioagrpResult;

        return $new;
    }
}

