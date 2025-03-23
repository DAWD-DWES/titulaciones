<?php

namespace Clases\Type;

class ArrayOfClaseConveMovilidad
{
    /**
     * @var null | array<int<0,max>, \Clases\Type\ClaseConveMovilidad>
     */
    private ?array $ClaseConveMovilidad = null;

    /**
     * @return null | array<int<0,max>, \Clases\Type\ClaseConveMovilidad>
     */
    public function getClaseConveMovilidad() : ?array
    {
        return $this->ClaseConveMovilidad;
    }

    /**
     * @param null | array<int<0,max>, \Clases\Type\ClaseConveMovilidad> $ClaseConveMovilidad
     * @return static
     */
    public function withClaseConveMovilidad(?array $ClaseConveMovilidad) : static
    {
        $new = clone $this;
        $new->ClaseConveMovilidad = $ClaseConveMovilidad;

        return $new;
    }
}

