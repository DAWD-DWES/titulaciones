<?php

namespace Clases\Type;

class ClaseAsiDepto
{
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
    private ?string $enlaceasi = null;

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
    private ?string $cred_teoasi = null;

    /**
     * @var null | string
     */
    private ?string $cred_prasi = null;

    /**
     * @var null | string
     */
    private ?string $cred_asignatura = null;

    /**
     * @var null | string
     */
    private ?string $cred_no_presenciales = null;

    /**
     * @var null | string
     */
    private ?string $cred_teodepare = null;

    /**
     * @var null | string
     */
    private ?string $cred_pradepare = null;

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
    public function getEnlaceasi() : ?string
    {
        return $this->enlaceasi;
    }

    /**
     * @param null | string $enlaceasi
     * @return static
     */
    public function withEnlaceasi(?string $enlaceasi) : static
    {
        $new = clone $this;
        $new->enlaceasi = $enlaceasi;

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
    public function getCredTeoasi() : ?string
    {
        return $this->cred_teoasi;
    }

    /**
     * @param null | string $cred_teoasi
     * @return static
     */
    public function withCredTeoasi(?string $cred_teoasi) : static
    {
        $new = clone $this;
        $new->cred_teoasi = $cred_teoasi;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCredPrasi() : ?string
    {
        return $this->cred_prasi;
    }

    /**
     * @param null | string $cred_prasi
     * @return static
     */
    public function withCredPrasi(?string $cred_prasi) : static
    {
        $new = clone $this;
        $new->cred_prasi = $cred_prasi;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCredAsignatura() : ?string
    {
        return $this->cred_asignatura;
    }

    /**
     * @param null | string $cred_asignatura
     * @return static
     */
    public function withCredAsignatura(?string $cred_asignatura) : static
    {
        $new = clone $this;
        $new->cred_asignatura = $cred_asignatura;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCredNoPresenciales() : ?string
    {
        return $this->cred_no_presenciales;
    }

    /**
     * @param null | string $cred_no_presenciales
     * @return static
     */
    public function withCredNoPresenciales(?string $cred_no_presenciales) : static
    {
        $new = clone $this;
        $new->cred_no_presenciales = $cred_no_presenciales;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCredTeodepare() : ?string
    {
        return $this->cred_teodepare;
    }

    /**
     * @param null | string $cred_teodepare
     * @return static
     */
    public function withCredTeodepare(?string $cred_teodepare) : static
    {
        $new = clone $this;
        $new->cred_teodepare = $cred_teodepare;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCredPradepare() : ?string
    {
        return $this->cred_pradepare;
    }

    /**
     * @param null | string $cred_pradepare
     * @return static
     */
    public function withCredPradepare(?string $cred_pradepare) : static
    {
        $new = clone $this;
        $new->cred_pradepare = $cred_pradepare;

        return $new;
    }
}

