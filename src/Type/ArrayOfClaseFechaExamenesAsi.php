<?php

namespace Clases\Type;

class ArrayOfClaseFechaExamenesAsi
{
    /**
     * @var null | array<int<0,max>, \Clases\Type\ClaseFechaExamenesAsi>
     */
    private ?array $ClaseFechaExamenesAsi = null;

    /**
     * @return null | array<int<0,max>, \Clases\Type\ClaseFechaExamenesAsi>
     */
    public function getClaseFechaExamenesAsi() : ?array
    {
        return $this->ClaseFechaExamenesAsi;
    }

    /**
     * @param null | array<int<0,max>, \Clases\Type\ClaseFechaExamenesAsi> $ClaseFechaExamenesAsi
     * @return static
     */
    public function withClaseFechaExamenesAsi(?array $ClaseFechaExamenesAsi) : static
    {
        $new = clone $this;
        $new->ClaseFechaExamenesAsi = $ClaseFechaExamenesAsi;

        return $new;
    }
}

