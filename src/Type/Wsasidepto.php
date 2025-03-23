<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Wsasidepto implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $plengua = null;

    /**
     * @var null | string
     */
    private ?string $pcurso = null;

    /**
     * @var null | string
     */
    private ?string $pcoddep = null;

    /**
     * @var null | string
     */
    private ?string $pcodest = null;

    /**
     * @var null | string
     */
    private ?string $pcodarea = null;

    /**
     * Constructor
     *
     * @param null | string $plengua
     * @param null | string $pcurso
     * @param null | string $pcoddep
     * @param null | string $pcodest
     * @param null | string $pcodarea
     */
    public function __construct(?string $plengua, ?string $pcurso, ?string $pcoddep, ?string $pcodest, ?string $pcodarea)
    {
        $this->plengua = $plengua;
        $this->pcurso = $pcurso;
        $this->pcoddep = $pcoddep;
        $this->pcodest = $pcodest;
        $this->pcodarea = $pcodarea;
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
    public function getPcoddep() : ?string
    {
        return $this->pcoddep;
    }

    /**
     * @param null | string $pcoddep
     * @return static
     */
    public function withPcoddep(?string $pcoddep) : static
    {
        $new = clone $this;
        $new->pcoddep = $pcoddep;

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
    public function getPcodarea() : ?string
    {
        return $this->pcodarea;
    }

    /**
     * @param null | string $pcodarea
     * @return static
     */
    public function withPcodarea(?string $pcodarea) : static
    {
        $new = clone $this;
        $new->pcodarea = $pcodarea;

        return $new;
    }
}

