<?php

namespace Clases\Type;

class ArrayOfClaseFechaExamenesPlan
{
    /**
     * @var null | array<int<0,max>, \Clases\Type\ClaseFechaExamenesPlan>
     */
    private ?array $ClaseFechaExamenesPlan = null;

    /**
     * @return null | array<int<0,max>, \Clases\Type\ClaseFechaExamenesPlan>
     */
    public function getClaseFechaExamenesPlan() : ?array
    {
        return $this->ClaseFechaExamenesPlan;
    }

    /**
     * @param null | array<int<0,max>, \Clases\Type\ClaseFechaExamenesPlan> $ClaseFechaExamenesPlan
     * @return static
     */
    public function withClaseFechaExamenesPlan(?array $ClaseFechaExamenesPlan) : static
    {
        $new = clone $this;
        $new->ClaseFechaExamenesPlan = $ClaseFechaExamenesPlan;

        return $new;
    }
}

