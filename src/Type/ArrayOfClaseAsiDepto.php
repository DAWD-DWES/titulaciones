<?php

namespace Clases\Type;

class ArrayOfClaseAsiDepto
{
    /**
     * @var null | array<int<0,max>, \Clases\Type\ClaseAsiDepto>
     */
    private ?array $ClaseAsiDepto = null;

    /**
     * @return null | array<int<0,max>, \Clases\Type\ClaseAsiDepto>
     */
    public function getClaseAsiDepto() : ?array
    {
        return $this->ClaseAsiDepto;
    }

    /**
     * @param null | array<int<0,max>, \Clases\Type\ClaseAsiDepto> $ClaseAsiDepto
     * @return static
     */
    public function withClaseAsiDepto(?array $ClaseAsiDepto) : static
    {
        $new = clone $this;
        $new->ClaseAsiDepto = $ClaseAsiDepto;

        return $new;
    }
}

