<?php

namespace Clases\Type;

class ClaseAreasDpto
{
    /**
     * @var null | string
     */
    private ?string $codarea = null;

    /**
     * @var null | string
     */
    private ?string $nomarea = null;

    /**
     * @return null | string
     */
    public function getCodarea() : ?string
    {
        return $this->codarea;
    }

    /**
     * @param null | string $codarea
     * @return static
     */
    public function withCodarea(?string $codarea) : static
    {
        $new = clone $this;
        $new->codarea = $codarea;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNomarea() : ?string
    {
        return $this->nomarea;
    }

    /**
     * @param null | string $nomarea
     * @return static
     */
    public function withNomarea(?string $nomarea) : static
    {
        $new = clone $this;
        $new->nomarea = $nomarea;

        return $new;
    }
}

