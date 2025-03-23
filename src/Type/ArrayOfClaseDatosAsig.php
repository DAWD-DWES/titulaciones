<?php

namespace Clases\Type;

class ArrayOfClaseDatosAsig
{
    /**
     * @var null | array<int<0,max>, \Clases\Type\ClaseDatosAsig>
     */
    private ?array $ClaseDatosAsig = null;

    /**
     * @return null | array<int<0,max>, \Clases\Type\ClaseDatosAsig>
     */
    public function getClaseDatosAsig() : ?array
    {
        return $this->ClaseDatosAsig;
    }

    /**
     * @param null | array<int<0,max>, \Clases\Type\ClaseDatosAsig> $ClaseDatosAsig
     * @return static
     */
    public function withClaseDatosAsig(?array $ClaseDatosAsig) : static
    {
        $new = clone $this;
        $new->ClaseDatosAsig = $ClaseDatosAsig;

        return $new;
    }
}

