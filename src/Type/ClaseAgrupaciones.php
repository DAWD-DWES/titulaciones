<?php

namespace Clases\Type;

class ClaseAgrupaciones
{
    /**
     * @var null | string
     */
    private ?string $idagrupa = null;

    /**
     * @var null | string
     */
    private ?string $descagr = null;

    /**
     * @var null | string
     */
    private ?string $enlaceagrp = null;

    /**
     * @var null | string
     */
    private ?string $codcen = null;

    /**
     * @var null | string
     */
    private ?string $desccen = null;

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
    private ?string $numcurso = null;

    /**
     * @var null | string
     */
    private ?string $nomturno = null;

    /**
     * @return null | string
     */
    public function getIdagrupa() : ?string
    {
        return $this->idagrupa;
    }

    /**
     * @param null | string $idagrupa
     * @return static
     */
    public function withIdagrupa(?string $idagrupa) : static
    {
        $new = clone $this;
        $new->idagrupa = $idagrupa;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDescagr() : ?string
    {
        return $this->descagr;
    }

    /**
     * @param null | string $descagr
     * @return static
     */
    public function withDescagr(?string $descagr) : static
    {
        $new = clone $this;
        $new->descagr = $descagr;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getEnlaceagrp() : ?string
    {
        return $this->enlaceagrp;
    }

    /**
     * @param null | string $enlaceagrp
     * @return static
     */
    public function withEnlaceagrp(?string $enlaceagrp) : static
    {
        $new = clone $this;
        $new->enlaceagrp = $enlaceagrp;

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
    public function getDesccen() : ?string
    {
        return $this->desccen;
    }

    /**
     * @param null | string $desccen
     * @return static
     */
    public function withDesccen(?string $desccen) : static
    {
        $new = clone $this;
        $new->desccen = $desccen;

        return $new;
    }

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
    public function getNumcurso() : ?string
    {
        return $this->numcurso;
    }

    /**
     * @param null | string $numcurso
     * @return static
     */
    public function withNumcurso(?string $numcurso) : static
    {
        $new = clone $this;
        $new->numcurso = $numcurso;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNomturno() : ?string
    {
        return $this->nomturno;
    }

    /**
     * @param null | string $nomturno
     * @return static
     */
    public function withNomturno(?string $nomturno) : static
    {
        $new = clone $this;
        $new->nomturno = $nomturno;

        return $new;
    }
}

