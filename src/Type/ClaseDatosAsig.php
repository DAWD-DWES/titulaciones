<?php

namespace Clases\Type;

class ClaseDatosAsig
{
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
    private ?string $crdtsteo = null;

    /**
     * @var null | string
     */
    private ?string $crdtspra = null;

    /**
     * @var null | string
     */
    private ?string $crdtects = null;

    /**
     * @var null | string
     */
    private ?string $duracion = null;

    /**
     * @var null | string
     */
    private ?string $duracion_codalf = null;

    /**
     * @var null | string
     */
    private ?string $tfg = null;

    /**
     * @var null | string
     */
    private ?string $programa = null;

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
    public function getCrdtects() : ?string
    {
        return $this->crdtects;
    }

    /**
     * @param null | string $crdtects
     * @return static
     */
    public function withCrdtects(?string $crdtects) : static
    {
        $new = clone $this;
        $new->crdtects = $crdtects;

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
    public function getDuracionCodalf() : ?string
    {
        return $this->duracion_codalf;
    }

    /**
     * @param null | string $duracion_codalf
     * @return static
     */
    public function withDuracionCodalf(?string $duracion_codalf) : static
    {
        $new = clone $this;
        $new->duracion_codalf = $duracion_codalf;

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
    public function getPrograma() : ?string
    {
        return $this->programa;
    }

    /**
     * @param null | string $programa
     * @return static
     */
    public function withPrograma(?string $programa) : static
    {
        $new = clone $this;
        $new->programa = $programa;

        return $new;
    }
}

