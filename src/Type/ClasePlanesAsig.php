<?php

namespace Clases\Type;

class ClasePlanesAsig
{
    /**
     * @var null | string
     */
    private ?string $curso = null;

    /**
     * @var null | string
     */
    private ?string $asignatura = null;

    /**
     * @var null | string
     */
    private ?string $codplan = null;

    /**
     * @var null | string
     */
    private ?string $nomplan = null;

    /**
     * @var null | string
     */
    private ?string $codcen = null;

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
    public function getAsignatura() : ?string
    {
        return $this->asignatura;
    }

    /**
     * @param null | string $asignatura
     * @return static
     */
    public function withAsignatura(?string $asignatura) : static
    {
        $new = clone $this;
        $new->asignatura = $asignatura;

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
}

