<?php

namespace Clases\Type;

class ArrayOfClaseFechaExamenesAsiTotal
{
    /**
     * @var null | array<int<0,max>, \Clases\Type\ClaseFechaExamenesAsiTotal>
     */
    private ?array $ClaseFechaExamenesAsiTotal = null;

    /**
     * @return null | array<int<0,max>, \Clases\Type\ClaseFechaExamenesAsiTotal>
     */
    public function getClaseFechaExamenesAsiTotal() : ?array
    {
        return $this->ClaseFechaExamenesAsiTotal;
    }

    /**
     * @param null | array<int<0,max>, \Clases\Type\ClaseFechaExamenesAsiTotal> $ClaseFechaExamenesAsiTotal
     * @return static
     */
    public function withClaseFechaExamenesAsiTotal(?array $ClaseFechaExamenesAsiTotal) : static
    {
        $new = clone $this;
        $new->ClaseFechaExamenesAsiTotal = $ClaseFechaExamenesAsiTotal;

        return $new;
    }
}

