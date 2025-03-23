<?php

namespace Clases\Type;

class ArrayOfClaseGrupoAsi
{
    /**
     * @var null | array<int<0,max>, \Clases\Type\ClaseGrupoAsi>
     */
    private ?array $ClaseGrupoAsi = null;

    /**
     * @return null | array<int<0,max>, \Clases\Type\ClaseGrupoAsi>
     */
    public function getClaseGrupoAsi() : ?array
    {
        return $this->ClaseGrupoAsi;
    }

    /**
     * @param null | array<int<0,max>, \Clases\Type\ClaseGrupoAsi> $ClaseGrupoAsi
     * @return static
     */
    public function withClaseGrupoAsi(?array $ClaseGrupoAsi) : static
    {
        $new = clone $this;
        $new->ClaseGrupoAsi = $ClaseGrupoAsi;

        return $new;
    }
}

