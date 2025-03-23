<?php

namespace Clases\Type;

class ArrayOfClaseHorarioAgrp
{
    /**
     * @var null | array<int<0,max>, \Clases\Type\ClaseHorarioAgrp>
     */
    private ?array $ClaseHorarioAgrp = null;

    /**
     * @return null | array<int<0,max>, \Clases\Type\ClaseHorarioAgrp>
     */
    public function getClaseHorarioAgrp() : ?array
    {
        return $this->ClaseHorarioAgrp;
    }

    /**
     * @param null | array<int<0,max>, \Clases\Type\ClaseHorarioAgrp> $ClaseHorarioAgrp
     * @return static
     */
    public function withClaseHorarioAgrp(?array $ClaseHorarioAgrp) : static
    {
        $new = clone $this;
        $new->ClaseHorarioAgrp = $ClaseHorarioAgrp;

        return $new;
    }
}

