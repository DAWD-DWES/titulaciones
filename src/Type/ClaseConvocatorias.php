<?php

namespace Clases\Type;

class ClaseConvocatorias
{
    /**
     * @var null | string
     */
    private ?string $cod = null;

    /**
     * @var null | string
     */
    private ?string $descripcion = null;

    /**
     * @return null | string
     */
    public function getCod() : ?string
    {
        return $this->cod;
    }

    /**
     * @param null | string $cod
     * @return static
     */
    public function withCod(?string $cod) : static
    {
        $new = clone $this;
        $new->cod = $cod;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDescripcion() : ?string
    {
        return $this->descripcion;
    }

    /**
     * @param null | string $descripcion
     * @return static
     */
    public function withDescripcion(?string $descripcion) : static
    {
        $new = clone $this;
        $new->descripcion = $descripcion;

        return $new;
    }
}

