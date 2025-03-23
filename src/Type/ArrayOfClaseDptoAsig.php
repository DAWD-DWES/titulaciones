<?php

namespace Clases\Type;

class ArrayOfClaseDptoAsig
{
    /**
     * @var null | array<int<0,max>, \Clases\Type\ClaseDptoAsig>
     */
    private ?array $ClaseDptoAsig = null;

    /**
     * @return null | array<int<0,max>, \Clases\Type\ClaseDptoAsig>
     */
    public function getClaseDptoAsig() : ?array
    {
        return $this->ClaseDptoAsig;
    }

    /**
     * @param null | array<int<0,max>, \Clases\Type\ClaseDptoAsig> $ClaseDptoAsig
     * @return static
     */
    public function withClaseDptoAsig(?array $ClaseDptoAsig) : static
    {
        $new = clone $this;
        $new->ClaseDptoAsig = $ClaseDptoAsig;

        return $new;
    }
}

