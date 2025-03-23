<?php

namespace Clases\Type;

class ArrayOfClaseFechaExamenesAsiNue
{
    /**
     * @var null | array<int<0,max>, \Clases\Type\ClaseFechaExamenesAsiNue>
     */
    private ?array $ClaseFechaExamenesAsiNue = null;

    /**
     * @return null | array<int<0,max>, \Clases\Type\ClaseFechaExamenesAsiNue>
     */
    public function getClaseFechaExamenesAsiNue() : ?array
    {
        return $this->ClaseFechaExamenesAsiNue;
    }

    /**
     * @param null | array<int<0,max>, \Clases\Type\ClaseFechaExamenesAsiNue> $ClaseFechaExamenesAsiNue
     * @return static
     */
    public function withClaseFechaExamenesAsiNue(?array $ClaseFechaExamenesAsiNue) : static
    {
        $new = clone $this;
        $new->ClaseFechaExamenesAsiNue = $ClaseFechaExamenesAsiNue;

        return $new;
    }
}

