<?php

namespace Clases\Type;

class ClasePlanesDep
{
    /**
     * @var null | string
     */
    private ?string $curso = null;

    /**
     * @var null | string
     */
    private ?string $coddep = null;

    /**
     * @var null | string
     */
    private ?string $codplan = null;

    /**
     * @var null | string
     */
    private ?string $nomplan = null;

    /**
     * @return null | string
     */
    public function getCurso() : ?string
    {
        return $this->curso;
    }

    /**
     * @param null | string $curso
     * @return static
     */
    public function withCurso(?string $curso) : static
    {
        $new = clone $this;
        $new->curso = $curso;

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
    public function getCodplan() : ?string
    {
        return $this->codplan;
    }

    /**
     * @param null | string $codplan
     * @return static
     */
    public function withCodplan(?string $codplan) : static
    {
        $new = clone $this;
        $new->codplan = $codplan;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNomplan() : ?string
    {
        return $this->nomplan;
    }

    /**
     * @param null | string $nomplan
     * @return static
     */
    public function withNomplan(?string $nomplan) : static
    {
        $new = clone $this;
        $new->nomplan = $nomplan;

        return $new;
    }
}

