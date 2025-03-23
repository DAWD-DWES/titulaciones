<?php

namespace Clases\Type;

class ClaseDatosPlan
{
    /**
     * @var null | string
     */
    private ?string $codest = null;

    /**
     * @var null | string
     */
    private ?string $nomest = null;

    /**
     * @var null | string
     */
    private ?string $codestgen = null;

    /**
     * @var null | string
     */
    private ?string $nomestgen = null;

    /**
     * @var null | string
     */
    private ?string $tipo = null;

    /**
     * @var null | string
     */
    private ?string $subtipo = null;

    /**
     * @var null | string
     */
    private ?string $subtiponombre = null;

    /**
     * @var null | string
     */
    private ?string $codcen = null;

    /**
     * @var null | string
     */
    private ?string $nomcen = null;

    /**
     * @var null | string
     */
    private ?string $anoini = null;

    /**
     * @var null | string
     */
    private ?string $anofin = null;

    /**
     * @var null | string
     */
    private ?string $codruct = null;

    /**
     * @var null | string
     */
    private ?string $ncursos = null;

    /**
     * @var null | string
     */
    private ?string $tipogra = null;

    /**
     * @var null | string
     */
    private ?string $area = null;

    /**
     * @var null | string
     */
    private ?string $urlmovil = null;

    /**
     * @var null | string
     */
    private ?string $imagenmovil = null;

    /**
     * @return null | string
     */
    public function getCodest() : ?string
    {
        return $this->codest;
    }

    /**
     * @param null | string $codest
     * @return static
     */
    public function withCodest(?string $codest) : static
    {
        $new = clone $this;
        $new->codest = $codest;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNomest() : ?string
    {
        return $this->nomest;
    }

    /**
     * @param null | string $nomest
     * @return static
     */
    public function withNomest(?string $nomest) : static
    {
        $new = clone $this;
        $new->nomest = $nomest;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCodestgen() : ?string
    {
        return $this->codestgen;
    }

    /**
     * @param null | string $codestgen
     * @return static
     */
    public function withCodestgen(?string $codestgen) : static
    {
        $new = clone $this;
        $new->codestgen = $codestgen;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNomestgen() : ?string
    {
        return $this->nomestgen;
    }

    /**
     * @param null | string $nomestgen
     * @return static
     */
    public function withNomestgen(?string $nomestgen) : static
    {
        $new = clone $this;
        $new->nomestgen = $nomestgen;

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
    public function getSubtipo() : ?string
    {
        return $this->subtipo;
    }

    /**
     * @param null | string $subtipo
     * @return static
     */
    public function withSubtipo(?string $subtipo) : static
    {
        $new = clone $this;
        $new->subtipo = $subtipo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSubtiponombre() : ?string
    {
        return $this->subtiponombre;
    }

    /**
     * @param null | string $subtiponombre
     * @return static
     */
    public function withSubtiponombre(?string $subtiponombre) : static
    {
        $new = clone $this;
        $new->subtiponombre = $subtiponombre;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCodcen() : ?string
    {
        return $this->codcen;
    }

    /**
     * @param null | string $codcen
     * @return static
     */
    public function withCodcen(?string $codcen) : static
    {
        $new = clone $this;
        $new->codcen = $codcen;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNomcen() : ?string
    {
        return $this->nomcen;
    }

    /**
     * @param null | string $nomcen
     * @return static
     */
    public function withNomcen(?string $nomcen) : static
    {
        $new = clone $this;
        $new->nomcen = $nomcen;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAnoini() : ?string
    {
        return $this->anoini;
    }

    /**
     * @param null | string $anoini
     * @return static
     */
    public function withAnoini(?string $anoini) : static
    {
        $new = clone $this;
        $new->anoini = $anoini;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAnofin() : ?string
    {
        return $this->anofin;
    }

    /**
     * @param null | string $anofin
     * @return static
     */
    public function withAnofin(?string $anofin) : static
    {
        $new = clone $this;
        $new->anofin = $anofin;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCodruct() : ?string
    {
        return $this->codruct;
    }

    /**
     * @param null | string $codruct
     * @return static
     */
    public function withCodruct(?string $codruct) : static
    {
        $new = clone $this;
        $new->codruct = $codruct;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNcursos() : ?string
    {
        return $this->ncursos;
    }

    /**
     * @param null | string $ncursos
     * @return static
     */
    public function withNcursos(?string $ncursos) : static
    {
        $new = clone $this;
        $new->ncursos = $ncursos;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTipogra() : ?string
    {
        return $this->tipogra;
    }

    /**
     * @param null | string $tipogra
     * @return static
     */
    public function withTipogra(?string $tipogra) : static
    {
        $new = clone $this;
        $new->tipogra = $tipogra;

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
    public function getUrlmovil() : ?string
    {
        return $this->urlmovil;
    }

    /**
     * @param null | string $urlmovil
     * @return static
     */
    public function withUrlmovil(?string $urlmovil) : static
    {
        $new = clone $this;
        $new->urlmovil = $urlmovil;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getImagenmovil() : ?string
    {
        return $this->imagenmovil;
    }

    /**
     * @param null | string $imagenmovil
     * @return static
     */
    public function withImagenmovil(?string $imagenmovil) : static
    {
        $new = clone $this;
        $new->imagenmovil = $imagenmovil;

        return $new;
    }
}

