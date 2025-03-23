<?php

namespace Clases\Type;

class ClaseDptoAsig
{
    /**
     * @var null | string
     */
    private ?string $codigo = null;

    /**
     * @var null | string
     */
    private ?string $nombre = null;

    /**
     * @var null | string
     */
    private ?string $responsable = null;

    /**
     * @var null | string
     */
    private ?string $porcentaje = null;

    /**
     * @return null | string
     */
    public function getCodigo() : ?string
    {
        return $this->codigo;
    }

    /**
     * @param null | string $codigo
     * @return static
     */
    public function withCodigo(?string $codigo) : static
    {
        $new = clone $this;
        $new->codigo = $codigo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNombre() : ?string
    {
        return $this->nombre;
    }

    /**
     * @param null | string $nombre
     * @return static
     */
    public function withNombre(?string $nombre) : static
    {
        $new = clone $this;
        $new->nombre = $nombre;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getResponsable() : ?string
    {
        return $this->responsable;
    }

    /**
     * @param null | string $responsable
     * @return static
     */
    public function withResponsable(?string $responsable) : static
    {
        $new = clone $this;
        $new->responsable = $responsable;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPorcentaje() : ?string
    {
        return $this->porcentaje;
    }

    /**
     * @param null | string $porcentaje
     * @return static
     */
    public function withPorcentaje(?string $porcentaje) : static
    {
        $new = clone $this;
        $new->porcentaje = $porcentaje;

        return $new;
    }
}

