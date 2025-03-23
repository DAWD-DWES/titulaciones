<?php

namespace Clases\Type;

class ClaseDptoCen
{
    /**
     * @var null | string
     */
    private ?string $codcen = null;

    /**
     * @var null | string
     */
    private ?string $coddep = null;

    /**
     * @var null | string
     */
    private ?string $nomdep = null;

    /**
     * @var null | string
     */
    private ?string $emaildep = null;

    /**
     * @return null | string
     */
    public function getCodcen() : ?string
    {
        return $this->codcen;
    }

    /**
     * @param null | string $codcen
     * @return static
     */
    public function withCodcen(?string $codcen) : static
    {
        $new = clone $this;
        $new->codcen = $codcen;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCoddep() : ?string
    {
        return $this->coddep;
    }

    /**
     * @param null | string $coddep
     * @return static
     */
    public function withCoddep(?string $coddep) : static
    {
        $new = clone $this;
        $new->coddep = $coddep;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNomdep() : ?string
    {
        return $this->nomdep;
    }

    /**
     * @param null | string $nomdep
     * @return static
     */
    public function withNomdep(?string $nomdep) : static
    {
        $new = clone $this;
        $new->nomdep = $nomdep;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getEmaildep() : ?string
    {
        return $this->emaildep;
    }

    /**
     * @param null | string $emaildep
     * @return static
     */
    public function withEmaildep(?string $emaildep) : static
    {
        $new = clone $this;
        $new->emaildep = $emaildep;

        return $new;
    }
}

