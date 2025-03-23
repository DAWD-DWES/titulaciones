<?php

namespace Clases\Type;

class ClaseFechaExamenesPlan
{
    /**
     * @var null | string
     */
    private ?string $codexa = null;

    /**
     * @var null | string
     */
    private ?string $fecha = null;

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
    private ?string $idactiv = null;

    /**
     * @var null | string
     */
    private ?string $codgrp = null;

    /**
     * @var null | string
     */
    private ?string $codconv = null;

    /**
     * @var null | string
     */
    private ?string $conv = null;

    /**
     * @var null | string
     */
    private ?string $idperiodo = null;

    /**
     * @var null | string
     */
    private ?string $observaciones = null;

    /**
     * @var null | string
     */
    private ?string $codest = null;

    /**
     * @var null | string
     */
    private ?string $numcurso = null;

    /**
     * @var null | string
     */
    private ?string $desccurso = null;

    /**
     * @var null | string
     */
    private ?string $tipo = null;

    /**
     * @var null | string
     */
    private ?string $fechareal = null;

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
    private ?string $diasemana = null;

    /**
     * @var null | string
     */
    private ?string $abrdsm = null;

    /**
     * @var null | string
     */
    private ?string $dsm = null;

    /**
     * @var null | string
     */
    private ?string $aula = null;

    /**
     * @var null | string
     */
    private ?string $aulasig = null;

    /**
     * @var null | string
     */
    private ?string $descaula = null;

    /**
     * @var null | string
     */
    private ?string $campus = null;

    /**
     * @var null | string
     */
    private ?string $edificio = null;

    /**
     * @var null | string
     */
    private ?string $orden = null;

    /**
     * @var null | string
     */
    private ?string $flgaula = null;

    /**
     * @var null | string
     */
    private ?string $turno = null;

    /**
     * @var null | string
     */
    private ?string $duracion = null;

    /**
     * @var null | string
     */
    private ?string $capacidad_aulas = null;

    /**
     * @var null | string
     */
    private ?string $observa_ge = null;

    /**
     * @return null | string
     */
    public function getCodexa() : ?string
    {
        return $this->codexa;
    }

    /**
     * @param null | string $codexa
     * @return static
     */
    public function withCodexa(?string $codexa) : static
    {
        $new = clone $this;
        $new->codexa = $codexa;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFecha() : ?string
    {
        return $this->fecha;
    }

    /**
     * @param null | string $fecha
     * @return static
     */
    public function withFecha(?string $fecha) : static
    {
        $new = clone $this;
        $new->fecha = $fecha;

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
    public function getCodconv() : ?string
    {
        return $this->codconv;
    }

    /**
     * @param null | string $codconv
     * @return static
     */
    public function withCodconv(?string $codconv) : static
    {
        $new = clone $this;
        $new->codconv = $codconv;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getConv() : ?string
    {
        return $this->conv;
    }

    /**
     * @param null | string $conv
     * @return static
     */
    public function withConv(?string $conv) : static
    {
        $new = clone $this;
        $new->conv = $conv;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIdperiodo() : ?string
    {
        return $this->idperiodo;
    }

    /**
     * @param null | string $idperiodo
     * @return static
     */
    public function withIdperiodo(?string $idperiodo) : static
    {
        $new = clone $this;
        $new->idperiodo = $idperiodo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getObservaciones() : ?string
    {
        return $this->observaciones;
    }

    /**
     * @param null | string $observaciones
     * @return static
     */
    public function withObservaciones(?string $observaciones) : static
    {
        $new = clone $this;
        $new->observaciones = $observaciones;

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
    public function getDesccurso() : ?string
    {
        return $this->desccurso;
    }

    /**
     * @param null | string $desccurso
     * @return static
     */
    public function withDesccurso(?string $desccurso) : static
    {
        $new = clone $this;
        $new->desccurso = $desccurso;

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
    public function getFechareal() : ?string
    {
        return $this->fechareal;
    }

    /**
     * @param null | string $fechareal
     * @return static
     */
    public function withFechareal(?string $fechareal) : static
    {
        $new = clone $this;
        $new->fechareal = $fechareal;

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
    public function getAbrdsm() : ?string
    {
        return $this->abrdsm;
    }

    /**
     * @param null | string $abrdsm
     * @return static
     */
    public function withAbrdsm(?string $abrdsm) : static
    {
        $new = clone $this;
        $new->abrdsm = $abrdsm;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDsm() : ?string
    {
        return $this->dsm;
    }

    /**
     * @param null | string $dsm
     * @return static
     */
    public function withDsm(?string $dsm) : static
    {
        $new = clone $this;
        $new->dsm = $dsm;

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
    public function getCampus() : ?string
    {
        return $this->campus;
    }

    /**
     * @param null | string $campus
     * @return static
     */
    public function withCampus(?string $campus) : static
    {
        $new = clone $this;
        $new->campus = $campus;

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
    public function getOrden() : ?string
    {
        return $this->orden;
    }

    /**
     * @param null | string $orden
     * @return static
     */
    public function withOrden(?string $orden) : static
    {
        $new = clone $this;
        $new->orden = $orden;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFlgaula() : ?string
    {
        return $this->flgaula;
    }

    /**
     * @param null | string $flgaula
     * @return static
     */
    public function withFlgaula(?string $flgaula) : static
    {
        $new = clone $this;
        $new->flgaula = $flgaula;

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
    public function getCapacidadAulas() : ?string
    {
        return $this->capacidad_aulas;
    }

    /**
     * @param null | string $capacidad_aulas
     * @return static
     */
    public function withCapacidadAulas(?string $capacidad_aulas) : static
    {
        $new = clone $this;
        $new->capacidad_aulas = $capacidad_aulas;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getObservaGe() : ?string
    {
        return $this->observa_ge;
    }

    /**
     * @param null | string $observa_ge
     * @return static
     */
    public function withObservaGe(?string $observa_ge) : static
    {
        $new = clone $this;
        $new->observa_ge = $observa_ge;

        return $new;
    }
}

