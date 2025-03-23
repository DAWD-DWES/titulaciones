<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Wsplanesdep implements RequestInterface
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
     * Constructor
     *
     * @param null | string $plengua
     * @param null | string $pcurso
     * @param null | string $pcoddep
     */
    public function __construct(?string $plengua, ?string $pcurso, ?string $pcoddep)
    {
        $this->plengua = $plengua;
        $this->pcurso = $pcurso;
        $this->pcoddep = $pcoddep;
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
}

