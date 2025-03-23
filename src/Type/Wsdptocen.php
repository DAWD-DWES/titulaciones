<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Wsdptocen implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $plengua = null;

    /**
     * @var null | string
     */
    private ?string $pcodcen = null;

    /**
     * @var null | string
     */
    private ?string $pcoddep = null;

    /**
     * Constructor
     *
     * @param null | string $plengua
     * @param null | string $pcodcen
     * @param null | string $pcoddep
     */
    public function __construct(?string $plengua, ?string $pcodcen, ?string $pcoddep)
    {
        $this->plengua = $plengua;
        $this->pcodcen = $pcodcen;
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

