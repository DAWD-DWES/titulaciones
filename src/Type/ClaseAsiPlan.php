<?php

namespace Clases\Type;

class ClaseAsiPlan
{
    /**
     * @var null | string
     */
    private ?string $codest = null;

    /**
     * @var null | string
     */
    private ?string $caca = null;

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
    private ?string $nomasicorto = null;

    /**
     * @var null | string
     */
    private ?string $tipo = null;

    /**
     * @var null | string
     */
    private ?string $ciclo = null;

    /**
     * @var null | string
     */
    private ?string $curso = null;

    /**
     * @var null | string
     */
    private ?string $desccurso = null;

    /**
     * @var null | string
     */
    private ?string $ofertada = null;

    /**
     * @var null | string
     */
    private ?string $docencia = null;

    /**
     * @var null | string
     */
    private ?string $complform = null;

    /**
     * @var null | string
     */
    private ?string $crdtsteo = null;

    /**
     * @var null | string
     */
    private ?string $crdtspra = null;

    /**
     * @var null | string
     */
    private ?string $crdtsects = null;

    /**
     * @var null | string
     */
    private ?string $duracion = null;

    /**
     * @var null | string
     */
    private ?string $tfg = null;

    /**
     * @var null | string
     */
    private ?string $estadoasi = null;

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
    public function getCaca() : ?string
    {
        return $this->caca;
    }

    /**
     * @param null | string $caca
     * @return static
     */
    public function withCaca(?string $caca) : static
    {
        $new = clone $this;
        $new->caca = $caca;

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
    public function getNomasicorto() : ?string
    {
        return $this->nomasicorto;
    }

    /**
     * @param null | string $nomasicorto
     * @return static
     */
    public function withNomasicorto(?string $nomasicorto) : static
    {
        $new = clone $this;
        $new->nomasicorto = $nomasicorto;

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
    public function getCiclo() : ?string
    {
        return $this->ciclo;
    }

    /**
     * @param null | string $ciclo
     * @return static
     */
    public function withCiclo(?string $ciclo) : static
    {
        $new = clone $this;
        $new->ciclo = $ciclo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCurso() : ?string
    {
        return $this->curso;
    }

    /**
     * @param null | string $curso
     * @return static
     */
    public function withCurso(?string $curso) : static
    {
        $new = clone $this;
        $new->curso = $curso;

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
    public function getOfertada() : ?string
    {
        return $this->ofertada;
    }

    /**
     * @param null | string $ofertada
     * @return static
     */
    public function withOfertada(?string $ofertada) : static
    {
        $new = clone $this;
        $new->ofertada = $ofertada;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDocencia() : ?string
    {
        return $this->docencia;
    }

    /**
     * @param null | string $docencia
     * @return static
     */
    public function withDocencia(?string $docencia) : static
    {
        $new = clone $this;
        $new->docencia = $docencia;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getComplform() : ?string
    {
        return $this->complform;
    }

    /**
     * @param null | string $complform
     * @return static
     */
    public function withComplform(?string $complform) : static
    {
        $new = clone $this;
        $new->complform = $complform;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCrdtsteo() : ?string
    {
        return $this->crdtsteo;
    }

    /**
     * @param null | string $crdtsteo
     * @return static
     */
    public function withCrdtsteo(?string $crdtsteo) : static
    {
        $new = clone $this;
        $new->crdtsteo = $crdtsteo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCrdtspra() : ?string
    {
        return $this->crdtspra;
    }

    /**
     * @param null | string $crdtspra
     * @return static
     */
    public function withCrdtspra(?string $crdtspra) : static
    {
        $new = clone $this;
        $new->crdtspra = $crdtspra;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCrdtsects() : ?string
    {
        return $this->crdtsects;
    }

    /**
     * @param null | string $crdtsects
     * @return static
     */
    public function withCrdtsects(?string $crdtsects) : static
    {
        $new = clone $this;
        $new->crdtsects = $crdtsects;

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
    public function getTfg() : ?string
    {
        return $this->tfg;
    }

    /**
     * @param null | string $tfg
     * @return static
     */
    public function withTfg(?string $tfg) : static
    {
        $new = clone $this;
        $new->tfg = $tfg;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getEstadoasi() : ?string
    {
        return $this->estadoasi;
    }

    /**
     * @param null | string $estadoasi
     * @return static
     */
    public function withEstadoasi(?string $estadoasi) : static
    {
        $new = clone $this;
        $new->estadoasi = $estadoasi;

        return $new;
    }
}

