<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Wstitulospropiosuni implements RequestInterface
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
    private ?string $ptipocurso = null;

    /**
     * Constructor
     *
     * @param null | string $plengua
     * @param null | string $pcurso
     * @param null | string $ptipocurso
     */
    public function __construct(?string $plengua, ?string $pcurso, ?string $ptipocurso)
    {
        $this->plengua = $plengua;
        $this->pcurso = $pcurso;
        $this->ptipocurso = $ptipocurso;
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
    public function getPtipocurso() : ?string
    {
        return $this->ptipocurso;
    }

    /**
     * @param null | string $ptipocurso
     * @return static
     */
    public function withPtipocurso(?string $ptipocurso) : static
    {
        $new = clone $this;
        $new->ptipocurso = $ptipocurso;

        return $new;
    }
}

