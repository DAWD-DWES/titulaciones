<?php

namespace Clases\Type;

class ArrayOfClasePlanesAsig
{
    /**
     * @var null | array<int<0,max>, \Clases\Type\ClasePlanesAsig>
     */
    private ?array $ClasePlanesAsig = null;

    /**
     * @return null | array<int<0,max>, \Clases\Type\ClasePlanesAsig>
     */
    public function getClasePlanesAsig() : ?array
    {
        return $this->ClasePlanesAsig;
    }

    /**
     * @param null | array<int<0,max>, \Clases\Type\ClasePlanesAsig> $ClasePlanesAsig
     * @return static
     */
    public function withClasePlanesAsig(?array $ClasePlanesAsig) : static
    {
        $new = clone $this;
        $new->ClasePlanesAsig = $ClasePlanesAsig;

        return $new;
    }
}

