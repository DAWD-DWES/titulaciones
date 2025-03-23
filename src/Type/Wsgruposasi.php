<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Wsgruposasi implements RequestInterface
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
    private ?string $pcodasi = null;

    /**
     * Constructor
     *
     * @param null | string $plengua
     * @param null | string $pcurso
     * @param null | string $pcodasi
     */
    public function __construct(?string $plengua, ?string $pcurso, ?string $pcodasi)
    {
        $this->plengua = $plengua;
        $this->pcurso = $pcurso;
        $this->pcodasi = $pcodasi;
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
}

