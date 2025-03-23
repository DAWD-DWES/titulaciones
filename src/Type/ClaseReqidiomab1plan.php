<?php

namespace Clases\Type;

class ClaseReqidiomab1plan
{
    /**
     * @var null | string
     */
    private ?string $tienerequisitob1 = null;

    /**
     * @return null | string
     */
    public function getTienerequisitob1() : ?string
    {
        return $this->tienerequisitob1;
    }

    /**
     * @param null | string $tienerequisitob1
     * @return static
     */
    public function withTienerequisitob1(?string $tienerequisitob1) : static
    {
        $new = clone $this;
        $new->tienerequisitob1 = $tienerequisitob1;

        return $new;
    }
}

