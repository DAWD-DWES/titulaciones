<?php

namespace Clases\Type;

class ArrayOfClaseTitulosUni
{
    /**
     * @var null | array<int<0,max>, \Clases\Type\ClaseTitulosUni>
     */
    private ?array $ClaseTitulosUni = null;

    /**
     * @return null | array<int<0,max>, \Clases\Type\ClaseTitulosUni>
     */
    public function getClaseTitulosUni() : ?array
    {
        return $this->ClaseTitulosUni;
    }

    /**
     * @param null | array<int<0,max>, \Clases\Type\ClaseTitulosUni> $ClaseTitulosUni
     * @return static
     */
    public function withClaseTitulosUni(?array $ClaseTitulosUni) : static
    {
        $new = clone $this;
        $new->ClaseTitulosUni = $ClaseTitulosUni;

        return $new;
    }
}

