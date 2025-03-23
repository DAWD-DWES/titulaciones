<?php

namespace Clases\Type;

class ClaseHorarioAgrp
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
    private ?string $codgrp = null;

    /**
     * @var null | string
     */
    private ?string $nomgrp = null;

    /**
     * @var null | string
     */
    private ?string $aula = null;

    /**
     * @var null | string
     */
    private ?string $descaula = null;

    /**
     * @var null | string
     */
    private ?string $dni = null;

    /**
     * @var null | string
     */
    private ?string $nombre = null;

    /**
     * @var null | string
     */
    private ?string $apellido1 = null;

    /**
     * @var null | string
     */
    private ?string $apellido2 = null;

    /**
     * @var null | string
     */
    private ?string $idplaza = null;

    /**
     * @var null | string
     */
    private ?string $nomplaz = null;

    /**
     * @var null | string
     */
    private ?string $fechainicio = null;

    /**
     * @var null | string
     */
    private ?string $fechafin = null;

    /**
     * @var null | string
     */
    private ?string $horaini = null;

    /**
     * @var null | string
     */
    private ?string $horafin = null;

    /**
     * @var null | string
     */
    private ?string $idactiv = null;

    /**
     * @var null | string
     */
    private ?string $nomact = null;

    /**
     * @var null | string
     */
    private ?string $teopra = null;

    /**
     * @var null | string
     */
    private ?string $codasi = null;

    /**
     * @var null | string
     */
    private ?string $nomasi = null;

    /**
     * @var null | string
     */
    private ?string $dia = null;

    /**
     * @var null | string
     */
    private ?string $diasem = null;

    /**
     * @var null | string
     */
    private ?string $edificio = null;

    /**
     * @var null | string
     */
    private ?string $aulasig = null;

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
    public function getCodgrp() : ?string
    {
        return $this->codgrp;
    }

    /**
     * @param null | string $codgrp
     * @return static
     */
    public function withCodgrp(?string $codgrp) : static
    {
        $new = clone $this;
        $new->codgrp = $codgrp;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNomgrp() : ?string
    {
        return $this->nomgrp;
    }

    /**
     * @param null | string $nomgrp
     * @return static
     */
    public function withNomgrp(?string $nomgrp) : static
    {
        $new = clone $this;
        $new->nomgrp = $nomgrp;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAula() : ?string
    {
        return $this->aula;
    }

    /**
     * @param null | string $aula
     * @return static
     */
    public function withAula(?string $aula) : static
    {
        $new = clone $this;
        $new->aula = $aula;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDescaula() : ?string
    {
        return $this->descaula;
    }

    /**
     * @param null | string $descaula
     * @return static
     */
    public function withDescaula(?string $descaula) : static
    {
        $new = clone $this;
        $new->descaula = $descaula;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDni() : ?string
    {
        return $this->dni;
    }

    /**
     * @param null | string $dni
     * @return static
     */
    public function withDni(?string $dni) : static
    {
        $new = clone $this;
        $new->dni = $dni;

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
    public function getApellido1() : ?string
    {
        return $this->apellido1;
    }

    /**
     * @param null | string $apellido1
     * @return static
     */
    public function withApellido1(?string $apellido1) : static
    {
        $new = clone $this;
        $new->apellido1 = $apellido1;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getApellido2() : ?string
    {
        return $this->apellido2;
    }

    /**
     * @param null | string $apellido2
     * @return static
     */
    public function withApellido2(?string $apellido2) : static
    {
        $new = clone $this;
        $new->apellido2 = $apellido2;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIdplaza() : ?string
    {
        return $this->idplaza;
    }

    /**
     * @param null | string $idplaza
     * @return static
     */
    public function withIdplaza(?string $idplaza) : static
    {
        $new = clone $this;
        $new->idplaza = $idplaza;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNomplaz() : ?string
    {
        return $this->nomplaz;
    }

    /**
     * @param null | string $nomplaz
     * @return static
     */
    public function withNomplaz(?string $nomplaz) : static
    {
        $new = clone $this;
        $new->nomplaz = $nomplaz;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFechainicio() : ?string
    {
        return $this->fechainicio;
    }

    /**
     * @param null | string $fechainicio
     * @return static
     */
    public function withFechainicio(?string $fechainicio) : static
    {
        $new = clone $this;
        $new->fechainicio = $fechainicio;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFechafin() : ?string
    {
        return $this->fechafin;
    }

    /**
     * @param null | string $fechafin
     * @return static
     */
    public function withFechafin(?string $fechafin) : static
    {
        $new = clone $this;
        $new->fechafin = $fechafin;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getHoraini() : ?string
    {
        return $this->horaini;
    }

    /**
     * @param null | string $horaini
     * @return static
     */
    public function withHoraini(?string $horaini) : static
    {
        $new = clone $this;
        $new->horaini = $horaini;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getHorafin() : ?string
    {
        return $this->horafin;
    }

    /**
     * @param null | string $horafin
     * @return static
     */
    public function withHorafin(?string $horafin) : static
    {
        $new = clone $this;
        $new->horafin = $horafin;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIdactiv() : ?string
    {
        return $this->idactiv;
    }

    /**
     * @param null | string $idactiv
     * @return static
     */
    public function withIdactiv(?string $idactiv) : static
    {
        $new = clone $this;
        $new->idactiv = $idactiv;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNomact() : ?string
    {
        return $this->nomact;
    }

    /**
     * @param null | string $nomact
     * @return static
     */
    public function withNomact(?string $nomact) : static
    {
        $new = clone $this;
        $new->nomact = $nomact;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTeopra() : ?string
    {
        return $this->teopra;
    }

    /**
     * @param null | string $teopra
     * @return static
     */
    public function withTeopra(?string $teopra) : static
    {
        $new = clone $this;
        $new->teopra = $teopra;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCodasi() : ?string
    {
        return $this->codasi;
    }

    /**
     * @param null | string $codasi
     * @return static
     */
    public function withCodasi(?string $codasi) : static
    {
        $new = clone $this;
        $new->codasi = $codasi;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNomasi() : ?string
    {
        return $this->nomasi;
    }

    /**
     * @param null | string $nomasi
     * @return static
     */
    public function withNomasi(?string $nomasi) : static
    {
        $new = clone $this;
        $new->nomasi = $nomasi;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDia() : ?string
    {
        return $this->dia;
    }

    /**
     * @param null | string $dia
     * @return static
     */
    public function withDia(?string $dia) : static
    {
        $new = clone $this;
        $new->dia = $dia;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDiasem() : ?string
    {
        return $this->diasem;
    }

    /**
     * @param null | string $diasem
     * @return static
     */
    public function withDiasem(?string $diasem) : static
    {
        $new = clone $this;
        $new->diasem = $diasem;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getEdificio() : ?string
    {
        return $this->edificio;
    }

    /**
     * @param null | string $edificio
     * @return static
     */
    public function withEdificio(?string $edificio) : static
    {
        $new = clone $this;
        $new->edificio = $edificio;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAulasig() : ?string
    {
        return $this->aulasig;
    }

    /**
     * @param null | string $aulasig
     * @return static
     */
    public function withAulasig(?string $aulasig) : static
    {
        $new = clone $this;
        $new->aulasig = $aulasig;

        return $new;
    }
}

