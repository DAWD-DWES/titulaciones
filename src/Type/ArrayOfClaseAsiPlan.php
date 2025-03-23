<?php

namespace Clases\Type;

class ArrayOfClaseAsiPlan
{
    /**
     * @var null | array<int<0,max>, \Clases\Type\ClaseAsiPlan>
     */
    private ?array $ClaseAsiPlan = null;

    /**
     * @return null | array<int<0,max>, \Clases\Type\ClaseAsiPlan>
     */
    public function getClaseAsiPlan() : ?array
    {
        return $this->ClaseAsiPlan;
    }

    /**
     * @param null | array<int<0,max>, \Clases\Type\ClaseAsiPlan> $ClaseAsiPlan
     * @return static
     */
    public function withClaseAsiPlan(?array $ClaseAsiPlan) : static
    {
        $new = clone $this;
        $new->ClaseAsiPlan = $ClaseAsiPlan;

        return $new;
    }
}

