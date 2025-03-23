<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Wsreqidiomab1plan implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $pcodest = null;

    /**
     * @var null | string
     */
    private ?string $pcodasi = null;

    /**
     * @var null | string
     */
    private ?string $pcurso = null;

    /**
     * Constructor
     *
     * @param null | string $pcodest
     * @param null | string $pcodasi
     * @param null | string $pcurso
     */
    public function __construct(?string $pcodest, ?string $pcodasi, ?string $pcurso)
    {
        $this->pcodest = $pcodest;
        $this->pcodasi = $pcodasi;
        $this->pcurso = $pcurso;
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
}

