<?php

namespace Clases\Type;

class ClaseTitulosPropiosUni
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
    private ?string $tipocurso = null;

    /**
     * @var null | string
     */
    private ?string $desctipocurso = null;

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
    public function getTipocurso() : ?string
    {
        return $this->tipocurso;
    }

    /**
     * @param null | string $tipocurso
     * @return static
     */
    public function withTipocurso(?string $tipocurso) : static
    {
        $new = clone $this;
        $new->tipocurso = $tipocurso;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDesctipocurso() : ?string
    {
        return $this->desctipocurso;
    }

    /**
     * @param null | string $desctipocurso
     * @return static
     */
    public function withDesctipocurso(?string $desctipocurso) : static
    {
        $new = clone $this;
        $new->desctipocurso = $desctipocurso;

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

