<?php

namespace Clases\Type;

class ArrayOfClaseTitulosPropiosUni
{
    /**
     * @var null | array<int<0,max>, \Clases\Type\ClaseTitulosPropiosUni>
     */
    private ?array $ClaseTitulosPropiosUni = null;

    /**
     * @return null | array<int<0,max>, \Clases\Type\ClaseTitulosPropiosUni>
     */
    public function getClaseTitulosPropiosUni() : ?array
    {
        return $this->ClaseTitulosPropiosUni;
    }

    /**
     * @param null | array<int<0,max>, \Clases\Type\ClaseTitulosPropiosUni> $ClaseTitulosPropiosUni
     * @return static
     */
    public function withClaseTitulosPropiosUni(?array $ClaseTitulosPropiosUni) : static
    {
        $new = clone $this;
        $new->ClaseTitulosPropiosUni = $ClaseTitulosPropiosUni;

        return $new;
    }
}

