<?php

namespace Clases\Type;

class ClaseTitulosUni
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
    private ?string $tipo = null;

    /**
     * @var null | string
     */
    private ?string $area = null;

    /**
     * @var null | string
     */
    private ?string $url = null;

    /**
     * @var null | string
     */
    private ?string $imagen = null;

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
    public function getTipo() : ?string
    {
        return $this->tipo;
    }

    /**
     * @param null | string $tipo
     * @return static
     */
    public function withTipo(?string $tipo) : static
    {
        $new = clone $this;
        $new->tipo = $tipo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getArea() : ?string
    {
        return $this->area;
    }

    /**
     * @param null | string $area
     * @return static
     */
    public function withArea(?string $area) : static
    {
        $new = clone $this;
        $new->area = $area;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }

    /**
     * @param null | string $url
     * @return static
     */
    public function withUrl(?string $url) : static
    {
        $new = clone $this;
        $new->url = $url;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getImagen() : ?string
    {
        return $this->imagen;
    }

    /**
     * @param null | string $imagen
     * @return static
     */
    public function withImagen(?string $imagen) : static
    {
        $new = clone $this;
        $new->imagen = $imagen;

        return $new;
    }
}

