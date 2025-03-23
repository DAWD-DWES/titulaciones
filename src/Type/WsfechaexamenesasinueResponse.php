<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\ResultInterface;

class WsfechaexamenesasinueResponse implements ResultInterface
{
    /**
     * @var null | \Clases\Type\ArrayOfClaseFechaExamenesAsiNue
     */
    private ?\Clases\Type\ArrayOfClaseFechaExamenesAsiNue $wsfechaexamenesasinueResult = null;

    /**
     * @return null | \Clases\Type\ArrayOfClaseFechaExamenesAsiNue
     */
    public function getWsfechaexamenesasinueResult() : ?\Clases\Type\ArrayOfClaseFechaExamenesAsiNue
    {
        return $this->wsfechaexamenesasinueResult;
    }

    /**
     * @param null | \Clases\Type\ArrayOfClaseFechaExamenesAsiNue $wsfechaexamenesasinueResult
     * @return static
     */
    public function withWsfechaexamenesasinueResult(?\Clases\Type\ArrayOfClaseFechaExamenesAsiNue $wsfechaexamenesasinueResult) : static
    {
        $new = clone $this;
        $new->wsfechaexamenesasinueResult = $wsfechaexamenesasinueResult;

        return $new;
    }
}

