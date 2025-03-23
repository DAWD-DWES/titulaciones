<?php

namespace Clases\Type;

class ArrayOfClaseAgrupaciones
{
    /**
     * @var null | array<int<0,max>, \Clases\Type\ClaseAgrupaciones>
     */
    private ?array $ClaseAgrupaciones = null;

    /**
     * @return null | array<int<0,max>, \Clases\Type\ClaseAgrupaciones>
     */
    public function getClaseAgrupaciones() : ?array
    {
        return $this->ClaseAgrupaciones;
    }

    /**
     * @param null | array<int<0,max>, \Clases\Type\ClaseAgrupaciones> $ClaseAgrupaciones
     * @return static
     */
    public function withClaseAgrupaciones(?array $ClaseAgrupaciones) : static
    {
        $new = clone $this;
        $new->ClaseAgrupaciones = $ClaseAgrupaciones;

        return $new;
    }
}

