<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Wsconvemovilidad implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $ptipoflujo = null;

    /**
     * Constructor
     *
     * @param null | string $ptipoflujo
     */
    public function __construct(?string $ptipoflujo)
    {
        $this->ptipoflujo = $ptipoflujo;
    }

    /**
     * @return null | string
     */
    public function getPtipoflujo() : ?string
    {
        return $this->ptipoflujo;
    }

    /**
     * @param null | string $ptipoflujo
     * @return static
     */
    public function withPtipoflujo(?string $ptipoflujo) : static
    {
        $new = clone $this;
        $new->ptipoflujo = $ptipoflujo;

        return $new;
    }
}

