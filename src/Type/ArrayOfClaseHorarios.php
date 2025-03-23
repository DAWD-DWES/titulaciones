<?php

namespace Clases\Type;

class ArrayOfClaseHorarios
{
    /**
     * @var null | array<int<0,max>, \Clases\Type\ClaseHorarios>
     */
    private ?array $ClaseHorarios = null;

    /**
     * @return null | array<int<0,max>, \Clases\Type\ClaseHorarios>
     */
    public function getClaseHorarios() : ?array
    {
        return $this->ClaseHorarios;
    }

    /**
     * @param null | array<int<0,max>, \Clases\Type\ClaseHorarios> $ClaseHorarios
     * @return static
     */
    public function withClaseHorarios(?array $ClaseHorarios) : static
    {
        $new = clone $this;
        $new->ClaseHorarios = $ClaseHorarios;

        return $new;
    }
}

