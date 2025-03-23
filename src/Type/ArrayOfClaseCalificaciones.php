<?php

namespace Clases\Type;

class ArrayOfClaseCalificaciones
{
    /**
     * @var null | array<int<0,max>, \Clases\Type\ClaseCalificaciones>
     */
    private ?array $ClaseCalificaciones = null;

    /**
     * @return null | array<int<0,max>, \Clases\Type\ClaseCalificaciones>
     */
    public function getClaseCalificaciones() : ?array
    {
        return $this->ClaseCalificaciones;
    }

    /**
     * @param null | array<int<0,max>, \Clases\Type\ClaseCalificaciones> $ClaseCalificaciones
     * @return static
     */
    public function withClaseCalificaciones(?array $ClaseCalificaciones) : static
    {
        $new = clone $this;
        $new->ClaseCalificaciones = $ClaseCalificaciones;

        return $new;
    }
}

