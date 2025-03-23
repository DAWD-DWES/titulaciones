<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Wshorarioagrp implements RequestInterface
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
    private ?string $pagrupa = null;

    /**
     * Constructor
     *
     * @param null | string $plengua
     * @param null | string $pcurso
     * @param null | string $pagrupa
     */
    public function __construct(?string $plengua, ?string $pcurso, ?string $pagrupa)
    {
        $this->plengua = $plengua;
        $this->pcurso = $pcurso;
        $this->pagrupa = $pagrupa;
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
    public function getPagrupa() : ?string
    {
        return $this->pagrupa;
    }

    /**
     * @param null | string $pagrupa
     * @return static
     */
    public function withPagrupa(?string $pagrupa) : static
    {
        $new = clone $this;
        $new->pagrupa = $pagrupa;

        return $new;
    }
}

