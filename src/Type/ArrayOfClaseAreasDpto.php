<?php

namespace Clases\Type;

class ArrayOfClaseAreasDpto
{
    /**
     * @var null | array<int<0,max>, \Clases\Type\ClaseAreasDpto>
     */
    private ?array $ClaseAreasDpto = null;

    /**
     * @return null | array<int<0,max>, \Clases\Type\ClaseAreasDpto>
     */
    public function getClaseAreasDpto() : ?array
    {
        return $this->ClaseAreasDpto;
    }

    /**
     * @param null | array<int<0,max>, \Clases\Type\ClaseAreasDpto> $ClaseAreasDpto
     * @return static
     */
    public function withClaseAreasDpto(?array $ClaseAreasDpto) : static
    {
        $new = clone $this;
        $new->ClaseAreasDpto = $ClaseAreasDpto;

        return $new;
    }
}

