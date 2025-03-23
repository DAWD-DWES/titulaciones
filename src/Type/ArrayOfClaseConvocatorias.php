<?php

namespace Clases\Type;

class ArrayOfClaseConvocatorias
{
    /**
     * @var null | array<int<0,max>, \Clases\Type\ClaseConvocatorias>
     */
    private ?array $ClaseConvocatorias = null;

    /**
     * @return null | array<int<0,max>, \Clases\Type\ClaseConvocatorias>
     */
    public function getClaseConvocatorias() : ?array
    {
        return $this->ClaseConvocatorias;
    }

    /**
     * @param null | array<int<0,max>, \Clases\Type\ClaseConvocatorias> $ClaseConvocatorias
     * @return static
     */
    public function withClaseConvocatorias(?array $ClaseConvocatorias) : static
    {
        $new = clone $this;
        $new->ClaseConvocatorias = $ClaseConvocatorias;

        return $new;
    }
}

