<?php

namespace Clases\Type;

class ArrayOfClaseDatosPlan
{
    /**
     * @var null | array<int<0,max>, \Clases\Type\ClaseDatosPlan>
     */
    private ?array $ClaseDatosPlan = null;

    /**
     * @return null | array<int<0,max>, \Clases\Type\ClaseDatosPlan>
     */
    public function getClaseDatosPlan() : ?array
    {
        return $this->ClaseDatosPlan;
    }

    /**
     * @param null | array<int<0,max>, \Clases\Type\ClaseDatosPlan> $ClaseDatosPlan
     * @return static
     */
    public function withClaseDatosPlan(?array $ClaseDatosPlan) : static
    {
        $new = clone $this;
        $new->ClaseDatosPlan = $ClaseDatosPlan;

        return $new;
    }
}

