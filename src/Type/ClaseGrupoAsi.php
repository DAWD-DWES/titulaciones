<?php

namespace Clases\Type;

class ClaseGrupoAsi
{
    /**
     * @var null | string
     */
    private ?string $ejecodnum = null;

    /**
     * @var null | string
     */
    private ?string $vaccodnum = null;

    /**
     * @var null | string
     */
    private ?string $gaccodnum = null;

    /**
     * @var null | string
     */
    private ?string $turno = null;

    /**
     * @var null | string
     */
    private ?string $idioma = null;

    /**
     * @var null | string
     */
    private ?string $duracion = null;

    /**
     * @var null | string
     */
    private ?string $idgrpactiv = null;

    /**
     * @var null | string
     */
    private ?string $descripcion = null;

    /**
     * @var null | string
     */
    private ?string $claseactiv = null;

    /**
     * @var null | string
     */
    private ?string $descactiv = null;

    /**
     * @var null | string
     */
    private ?string $capacidadgrupo = null;

    /**
     * @var null | string
     */
    private ?string $nodocodnum = null;

    /**
     * @var null | string
     */
    private ?string $placodalf = null;

    /**
     * @return null | string
     */
    public function getEjecodnum() : ?string
    {
        return $this->ejecodnum;
    }

    /**
     * @param null | string $ejecodnum
     * @return static
     */
    public function withEjecodnum(?string $ejecodnum) : static
    {
        $new = clone $this;
        $new->ejecodnum = $ejecodnum;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getVaccodnum() : ?string
    {
        return $this->vaccodnum;
    }

    /**
     * @param null | string $vaccodnum
     * @return static
     */
    public function withVaccodnum(?string $vaccodnum) : static
    {
        $new = clone $this;
        $new->vaccodnum = $vaccodnum;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getGaccodnum() : ?string
    {
        return $this->gaccodnum;
    }

    /**
     * @param null | string $gaccodnum
     * @return static
     */
    public function withGaccodnum(?string $gaccodnum) : static
    {
        $new = clone $this;
        $new->gaccodnum = $gaccodnum;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTurno() : ?string
    {
        return $this->turno;
    }

    /**
     * @param null | string $turno
     * @return static
     */
    public function withTurno(?string $turno) : static
    {
        $new = clone $this;
        $new->turno = $turno;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIdioma() : ?string
    {
        return $this->idioma;
    }

    /**
     * @param null | string $idioma
     * @return static
     */
    public function withIdioma(?string $idioma) : static
    {
        $new = clone $this;
        $new->idioma = $idioma;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDuracion() : ?string
    {
        return $this->duracion;
    }

    /**
     * @param null | string $duracion
     * @return static
     */
    public function withDuracion(?string $duracion) : static
    {
        $new = clone $this;
        $new->duracion = $duracion;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIdgrpactiv() : ?string
    {
        return $this->idgrpactiv;
    }

    /**
     * @param null | string $idgrpactiv
     * @return static
     */
    public function withIdgrpactiv(?string $idgrpactiv) : static
    {
        $new = clone $this;
        $new->idgrpactiv = $idgrpactiv;

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
    public function getClaseactiv() : ?string
    {
        return $this->claseactiv;
    }

    /**
     * @param null | string $claseactiv
     * @return static
     */
    public function withClaseactiv(?string $claseactiv) : static
    {
        $new = clone $this;
        $new->claseactiv = $claseactiv;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDescactiv() : ?string
    {
        return $this->descactiv;
    }

    /**
     * @param null | string $descactiv
     * @return static
     */
    public function withDescactiv(?string $descactiv) : static
    {
        $new = clone $this;
        $new->descactiv = $descactiv;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCapacidadgrupo() : ?string
    {
        return $this->capacidadgrupo;
    }

    /**
     * @param null | string $capacidadgrupo
     * @return static
     */
    public function withCapacidadgrupo(?string $capacidadgrupo) : static
    {
        $new = clone $this;
        $new->capacidadgrupo = $capacidadgrupo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNodocodnum() : ?string
    {
        return $this->nodocodnum;
    }

    /**
     * @param null | string $nodocodnum
     * @return static
     */
    public function withNodocodnum(?string $nodocodnum) : static
    {
        $new = clone $this;
        $new->nodocodnum = $nodocodnum;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPlacodalf() : ?string
    {
        return $this->placodalf;
    }

    /**
     * @param null | string $placodalf
     * @return static
     */
    public function withPlacodalf(?string $placodalf) : static
    {
        $new = clone $this;
        $new->placodalf = $placodalf;

        return $new;
    }
}

