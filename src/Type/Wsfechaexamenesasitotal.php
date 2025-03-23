<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Wsfechaexamenesasitotal implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $plengua = null;

    /**
     * @var null | string
     */
    private ?string $pcodest = null;

    /**
     * @var null | string
     */
    private ?string $pcurso = null;

    /**
     * @var null | string
     */
    private ?string $pcodasi = null;

    /**
     * @var null | string
     */
    private ?string $pcodconvoc = null;

    /**
     * @var null | string
     */
    private ?string $porden = null;

    /**
     * Constructor
     *
     * @param null | string $plengua
     * @param null | string $pcodest
     * @param null | string $pcurso
     * @param null | string $pcodasi
     * @param null | string $pcodconvoc
     * @param null | string $porden
     */
    public function __construct(?string $plengua, ?string $pcodest, ?string $pcurso, ?string $pcodasi, ?string $pcodconvoc, ?string $porden)
    {
        $this->plengua = $plengua;
        $this->pcodest = $pcodest;
        $this->pcurso = $pcurso;
        $this->pcodasi = $pcodasi;
        $this->pcodconvoc = $pcodconvoc;
        $this->porden = $porden;
    }

    /**
     * @return null | string
     */
    public function getPlengua() : ?string
    {
        return $this->plengua;
    }

    /**
     * @param null | string $plengua
     * @return static
     */
    public function withPlengua(?string $plengua) : static
    {
        $new = clone $this;
        $new->plengua = $plengua;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPcodest() : ?string
    {
        return $this->pcodest;
    }

    /**
     * @param null | string $pcodest
     * @return static
     */
    public function withPcodest(?string $pcodest) : static
    {
        $new = clone $this;
        $new->pcodest = $pcodest;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPcurso() : ?string
    {
        return $this->pcurso;
    }

    /**
     * @param null | string $pcurso
     * @return static
     */
    public function withPcurso(?string $pcurso) : static
    {
        $new = clone $this;
        $new->pcurso = $pcurso;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPcodasi() : ?string
    {
        return $this->pcodasi;
    }

    /**
     * @param null | string $pcodasi
     * @return static
     */
    public function withPcodasi(?string $pcodasi) : static
    {
        $new = clone $this;
        $new->pcodasi = $pcodasi;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPcodconvoc() : ?string
    {
        return $this->pcodconvoc;
    }

    /**
     * @param null | string $pcodconvoc
     * @return static
     */
    public function withPcodconvoc(?string $pcodconvoc) : static
    {
        $new = clone $this;
        $new->pcodconvoc = $pcodconvoc;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPorden() : ?string
    {
        return $this->porden;
    }

    /**
     * @param null | string $porden
     * @return static
     */
    public function withPorden(?string $porden) : static
    {
        $new = clone $this;
        $new->porden = $porden;

        return $new;
    }
}

