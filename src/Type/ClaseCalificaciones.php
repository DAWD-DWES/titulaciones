<?php

namespace Clases\Type;

class ClaseCalificaciones
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
     * @var null | string
     */
    private ?string $descripcionasi = null;

    /**
     * @var null | string
     */
    private ?string $ranmin = null;

    /**
     * @var null | string
     */
    private ?string $ranmax = null;

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

    /**
     * @return null | string
     */
    public function getDescripcionasi() : ?string
    {
        return $this->descripcionasi;
    }

    /**
     * @param null | string $descripcionasi
     * @return static
     */
    public function withDescripcionasi(?string $descripcionasi) : static
    {
        $new = clone $this;
        $new->descripcionasi = $descripcionasi;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getRanmin() : ?string
    {
        return $this->ranmin;
    }

    /**
     * @param null | string $ranmin
     * @return static
     */
    public function withRanmin(?string $ranmin) : static
    {
        $new = clone $this;
        $new->ranmin = $ranmin;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getRanmax() : ?string
    {
        return $this->ranmax;
    }

    /**
     * @param null | string $ranmax
     * @return static
     */
    public function withRanmax(?string $ranmax) : static
    {
        $new = clone $this;
        $new->ranmax = $ranmax;

        return $new;
    }
}

