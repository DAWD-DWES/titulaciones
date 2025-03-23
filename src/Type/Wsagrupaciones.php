<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Wsagrupaciones implements RequestInterface
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
    private ?string $pcodcen = null;

    /**
     * @var null | string
     */
    private ?string $pcodest = null;

    /**
     * Constructor
     *
     * @param null | string $plengua
     * @param null | string $pcurso
     * @param null | string $pcodcen
     * @param null | string $pcodest
     */
    public function __construct(?string $plengua, ?string $pcurso, ?string $pcodcen, ?string $pcodest)
    {
        $this->plengua = $plengua;
        $this->pcurso = $pcurso;
        $this->pcodcen = $pcodcen;
        $this->pcodest = $pcodest;
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
    public function getPcodcen() : ?string
    {
        return $this->pcodcen;
    }

    /**
     * @param null | string $pcodcen
     * @return static
     */
    public function withPcodcen(?string $pcodcen) : static
    {
        $new = clone $this;
        $new->pcodcen = $pcodcen;

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
}

