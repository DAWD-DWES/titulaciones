<?php

namespace Clases\Type;

class ClaseHorarios
{
    /**
     * @var null | string
     */
    private ?string $teopra = null;

    /**
     * @var null | string
     */
    private ?string $codgrp = null;

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
    private ?string $fechainicio = null;

    /**
     * @var null | string
     */
    private ?string $fechafin = null;

    /**
     * @var null | string
     */
    private ?string $dia = null;

    /**
     * @var null | string
     */
    private ?string $diasemana = null;

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
    private ?string $aula = null;

    /**
     * @var null | string
     */
    private ?string $descaula = null;

    /**
     * @var null | string
     */
    private ?string $aulasig = null;

    /**
     * @var null | string
     */
    private ?string $clase_activ = null;

    /**
     * @var null | string
     */
    private ?string $descactiv = null;

    /**
     * @var null | string
     */
    private ?string $descgrupo = null;

    /**
     * @var null | string
     */
    private ?string $esara_sn = null;

    /**
     * @var null | string
     */
    private ?string $idioma = null;

    /**
     * @var null | string
     */
    private ?string $capacidadgrupo = null;

    /**
     * @var null | string
     */
    private ?string $flgcpc = null;

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
    public function getDiasemana() : ?string
    {
        return $this->diasemana;
    }

    /**
     * @param null | string $diasemana
     * @return static
     */
    public function withDiasemana(?string $diasemana) : static
    {
        $new = clone $this;
        $new->diasemana = $diasemana;

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

    /**
     * @return null | string
     */
    public function getClaseActiv() : ?string
    {
        return $this->clase_activ;
    }

    /**
     * @param null | string $clase_activ
     * @return static
     */
    public function withClaseActiv(?string $clase_activ) : static
    {
        $new = clone $this;
        $new->clase_activ = $clase_activ;

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
    public function getDescgrupo() : ?string
    {
        return $this->descgrupo;
    }

    /**
     * @param null | string $descgrupo
     * @return static
     */
    public function withDescgrupo(?string $descgrupo) : static
    {
        $new = clone $this;
        $new->descgrupo = $descgrupo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getEsaraSn() : ?string
    {
        return $this->esara_sn;
    }

    /**
     * @param null | string $esara_sn
     * @return static
     */
    public function withEsaraSn(?string $esara_sn) : static
    {
        $new = clone $this;
        $new->esara_sn = $esara_sn;

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
    public function getFlgcpc() : ?string
    {
        return $this->flgcpc;
    }

    /**
     * @param null | string $flgcpc
     * @return static
     */
    public function withFlgcpc(?string $flgcpc) : static
    {
        $new = clone $this;
        $new->flgcpc = $flgcpc;

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

