<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\ResultInterface;

class WsgruposasiResponse implements ResultInterface
{
    /**
     * @var null | \Clases\Type\ArrayOfClaseGrupoAsi
     */
    private ?\Clases\Type\ArrayOfClaseGrupoAsi $wsgruposasiResult = null;

    /**
     * @return null | \Clases\Type\ArrayOfClaseGrupoAsi
     */
    public function getWsgruposasiResult() : ?\Clases\Type\ArrayOfClaseGrupoAsi
    {
        return $this->wsgruposasiResult;
    }

    /**
     * @param null | \Clases\Type\ArrayOfClaseGrupoAsi $wsgruposasiResult
     * @return static
     */
    public function withWsgruposasiResult(?\Clases\Type\ArrayOfClaseGrupoAsi $wsgruposasiResult) : static
    {
        $new = clone $this;
        $new->wsgruposasiResult = $wsgruposasiResult;

        return $new;
    }
}

