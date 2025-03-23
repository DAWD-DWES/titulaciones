<?php

namespace Clases\Type;

class ArrayOfClasePlanesDep
{
    /**
     * @var null | array<int<0,max>, \Clases\Type\ClasePlanesDep>
     */
    private ?array $ClasePlanesDep = null;

    /**
     * @return null | array<int<0,max>, \Clases\Type\ClasePlanesDep>
     */
    public function getClasePlanesDep() : ?array
    {
        return $this->ClasePlanesDep;
    }

    /**
     * @param null | array<int<0,max>, \Clases\Type\ClasePlanesDep> $ClasePlanesDep
     * @return static
     */
    public function withClasePlanesDep(?array $ClasePlanesDep) : static
    {
        $new = clone $this;
        $new->ClasePlanesDep = $ClasePlanesDep;

        return $new;
    }
}

