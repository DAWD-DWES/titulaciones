<?php

namespace Clases\Type;

class ArrayOfClaseDptoCen
{
    /**
     * @var null | array<int<0,max>, \Clases\Type\ClaseDptoCen>
     */
    private ?array $ClaseDptoCen = null;

    /**
     * @return null | array<int<0,max>, \Clases\Type\ClaseDptoCen>
     */
    public function getClaseDptoCen() : ?array
    {
        return $this->ClaseDptoCen;
    }

    /**
     * @param null | array<int<0,max>, \Clases\Type\ClaseDptoCen> $ClaseDptoCen
     * @return static
     */
    public function withClaseDptoCen(?array $ClaseDptoCen) : static
    {
        $new = clone $this;
        $new->ClaseDptoCen = $ClaseDptoCen;

        return $new;
    }
}

