<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Wsdatosplan implements RequestInterface
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
    private ?string $ptipo = null;

    /**
     * @var null | string
     */
    private ?string $psubtipo = null;

    /**
     * @var null | string
     */
    private ?string $pcodcen = null;

    /**
     * @var null | string
     */
    private ?string $pcurso = null;

    /**
     * @var null | string
     */
    private ?string $pflgmovil = null;

    /**
     * Constructor
     *
     * @param null | string $plengua
     * @param null | string $pcodest
     * @param null | string $ptipo
     * @param null | string $psubtipo
     * @param null | string $pcodcen
     * @param null | string $pcurso
     * @param null | string $pflgmovil
     */
    public function __construct(?string $plengua, ?string $pcodest, ?string $ptipo, ?string $psubtipo, ?string $pcodcen, ?string $pcurso, ?string $pflgmovil)
    {
        $this->plengua = $plengua;
        $this->pcodest = $pcodest;
        $this->ptipo = $ptipo;
        $this->psubtipo = $psubtipo;
        $this->pcodcen = $pcodcen;
        $this->pcurso = $pcurso;
        $this->pflgmovil = $pflgmovil;
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
    public function getPtipo() : ?string
    {
        return $this->ptipo;
    }

    /**
     * @param null | string $ptipo
     * @return static
     */
    public function withPtipo(?string $ptipo) : static
    {
        $new = clone $this;
        $new->ptipo = $ptipo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPsubtipo() : ?string
    {
        return $this->psubtipo;
    }

    /**
     * @param null | string $psubtipo
     * @return static
     */
    public function withPsubtipo(?string $psubtipo) : static
    {
        $new = clone $this;
        $new->psubtipo = $psubtipo;

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
    public function getPflgmovil() : ?string
    {
        return $this->pflgmovil;
    }

    /**
     * @param null | string $pflgmovil
     * @return static
     */
    public function withPflgmovil(?string $pflgmovil) : static
    {
        $new = clone $this;
        $new->pflgmovil = $pflgmovil;

        return $new;
    }
}

