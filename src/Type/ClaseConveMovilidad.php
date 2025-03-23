<?php

namespace Clases\Type;

class ClaseConveMovilidad
{
    /**
     * @var null | string
     */
    private ?string $tip_codnum = null;

    /**
     * @var null | string
     */
    private ?string $uni_codalf = null;

    /**
     * @var null | string
     */
    private ?string $pai_codalf = null;

    /**
     * @var null | string
     */
    private ?string $nombre = null;

    /**
     * @var null | string
     */
    private ?string $nomuni = null;

    /**
     * @var null | string
     */
    private ?string $are_codalf = null;

    /**
     * @var null | string
     */
    private ?string $desc_area_eng = null;

    /**
     * @var null | string
     */
    private ?string $desc_area_val = null;

    /**
     * @var null | string
     */
    private ?string $desc_area_cas = null;

    /**
     * @var null | string
     */
    private ?string $nivel = null;

    /**
     * @var null | string
     */
    private ?string $plazas = null;

    /**
     * @var null | string
     */
    private ?string $meses = null;

    /**
     * @var null | string
     */
    private ?string $vigente = null;

    /**
     * @var null | string
     */
    private ?string $desde = null;

    /**
     * @var null | string
     */
    private ?string $hasta = null;

    /**
     * @var null | string
     */
    private ?string $flgmodificable = null;

    /**
     * @var null | string
     */
    private ?string $disp_desidi2 = null;

    /**
     * @var null | string
     */
    private ?string $prog_codnum = null;

    /**
     * @var null | string
     */
    private ?string $cen_codnum = null;

    /**
     * @var null | string
     */
    private ?string $nom_centro = null;

    /**
     * @var null | string
     */
    private ?string $idi_universidad = null;

    /**
     * @var null | string
     */
    private ?string $modo = null;

    /**
     * @var null | string
     */
    private ?string $idiomas_nivel1 = null;

    /**
     * @var null | string
     */
    private ?string $idiomas_nivel2 = null;

    /**
     * @var null | string
     */
    private ?string $idiomas_nivel3 = null;

    /**
     * @var null | string
     */
    private ?string $nomcoordina = null;

    /**
     * @var null | string
     */
    private ?string $promotor_ua = null;

    /**
     * @var null | string
     */
    private ?string $web_uni = null;

    /**
     * @var null | string
     */
    private ?string $web_oficina = null;

    /**
     * @return null | string
     */
    public function getTipCodnum() : ?string
    {
        return $this->tip_codnum;
    }

    /**
     * @param null | string $tip_codnum
     * @return static
     */
    public function withTipCodnum(?string $tip_codnum) : static
    {
        $new = clone $this;
        $new->tip_codnum = $tip_codnum;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getUniCodalf() : ?string
    {
        return $this->uni_codalf;
    }

    /**
     * @param null | string $uni_codalf
     * @return static
     */
    public function withUniCodalf(?string $uni_codalf) : static
    {
        $new = clone $this;
        $new->uni_codalf = $uni_codalf;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPaiCodalf() : ?string
    {
        return $this->pai_codalf;
    }

    /**
     * @param null | string $pai_codalf
     * @return static
     */
    public function withPaiCodalf(?string $pai_codalf) : static
    {
        $new = clone $this;
        $new->pai_codalf = $pai_codalf;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNombre() : ?string
    {
        return $this->nombre;
    }

    /**
     * @param null | string $nombre
     * @return static
     */
    public function withNombre(?string $nombre) : static
    {
        $new = clone $this;
        $new->nombre = $nombre;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNomuni() : ?string
    {
        return $this->nomuni;
    }

    /**
     * @param null | string $nomuni
     * @return static
     */
    public function withNomuni(?string $nomuni) : static
    {
        $new = clone $this;
        $new->nomuni = $nomuni;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAreCodalf() : ?string
    {
        return $this->are_codalf;
    }

    /**
     * @param null | string $are_codalf
     * @return static
     */
    public function withAreCodalf(?string $are_codalf) : static
    {
        $new = clone $this;
        $new->are_codalf = $are_codalf;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDescAreaEng() : ?string
    {
        return $this->desc_area_eng;
    }

    /**
     * @param null | string $desc_area_eng
     * @return static
     */
    public function withDescAreaEng(?string $desc_area_eng) : static
    {
        $new = clone $this;
        $new->desc_area_eng = $desc_area_eng;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDescAreaVal() : ?string
    {
        return $this->desc_area_val;
    }

    /**
     * @param null | string $desc_area_val
     * @return static
     */
    public function withDescAreaVal(?string $desc_area_val) : static
    {
        $new = clone $this;
        $new->desc_area_val = $desc_area_val;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDescAreaCas() : ?string
    {
        return $this->desc_area_cas;
    }

    /**
     * @param null | string $desc_area_cas
     * @return static
     */
    public function withDescAreaCas(?string $desc_area_cas) : static
    {
        $new = clone $this;
        $new->desc_area_cas = $desc_area_cas;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNivel() : ?string
    {
        return $this->nivel;
    }

    /**
     * @param null | string $nivel
     * @return static
     */
    public function withNivel(?string $nivel) : static
    {
        $new = clone $this;
        $new->nivel = $nivel;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPlazas() : ?string
    {
        return $this->plazas;
    }

    /**
     * @param null | string $plazas
     * @return static
     */
    public function withPlazas(?string $plazas) : static
    {
        $new = clone $this;
        $new->plazas = $plazas;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMeses() : ?string
    {
        return $this->meses;
    }

    /**
     * @param null | string $meses
     * @return static
     */
    public function withMeses(?string $meses) : static
    {
        $new = clone $this;
        $new->meses = $meses;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getVigente() : ?string
    {
        return $this->vigente;
    }

    /**
     * @param null | string $vigente
     * @return static
     */
    public function withVigente(?string $vigente) : static
    {
        $new = clone $this;
        $new->vigente = $vigente;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDesde() : ?string
    {
        return $this->desde;
    }

    /**
     * @param null | string $desde
     * @return static
     */
    public function withDesde(?string $desde) : static
    {
        $new = clone $this;
        $new->desde = $desde;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getHasta() : ?string
    {
        return $this->hasta;
    }

    /**
     * @param null | string $hasta
     * @return static
     */
    public function withHasta(?string $hasta) : static
    {
        $new = clone $this;
        $new->hasta = $hasta;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFlgmodificable() : ?string
    {
        return $this->flgmodificable;
    }

    /**
     * @param null | string $flgmodificable
     * @return static
     */
    public function withFlgmodificable(?string $flgmodificable) : static
    {
        $new = clone $this;
        $new->flgmodificable = $flgmodificable;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDispDesidi2() : ?string
    {
        return $this->disp_desidi2;
    }

    /**
     * @param null | string $disp_desidi2
     * @return static
     */
    public function withDispDesidi2(?string $disp_desidi2) : static
    {
        $new = clone $this;
        $new->disp_desidi2 = $disp_desidi2;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getProgCodnum() : ?string
    {
        return $this->prog_codnum;
    }

    /**
     * @param null | string $prog_codnum
     * @return static
     */
    public function withProgCodnum(?string $prog_codnum) : static
    {
        $new = clone $this;
        $new->prog_codnum = $prog_codnum;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCenCodnum() : ?string
    {
        return $this->cen_codnum;
    }

    /**
     * @param null | string $cen_codnum
     * @return static
     */
    public function withCenCodnum(?string $cen_codnum) : static
    {
        $new = clone $this;
        $new->cen_codnum = $cen_codnum;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNomCentro() : ?string
    {
        return $this->nom_centro;
    }

    /**
     * @param null | string $nom_centro
     * @return static
     */
    public function withNomCentro(?string $nom_centro) : static
    {
        $new = clone $this;
        $new->nom_centro = $nom_centro;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIdiUniversidad() : ?string
    {
        return $this->idi_universidad;
    }

    /**
     * @param null | string $idi_universidad
     * @return static
     */
    public function withIdiUniversidad(?string $idi_universidad) : static
    {
        $new = clone $this;
        $new->idi_universidad = $idi_universidad;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getModo() : ?string
    {
        return $this->modo;
    }

    /**
     * @param null | string $modo
     * @return static
     */
    public function withModo(?string $modo) : static
    {
        $new = clone $this;
        $new->modo = $modo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIdiomasNivel1() : ?string
    {
        return $this->idiomas_nivel1;
    }

    /**
     * @param null | string $idiomas_nivel1
     * @return static
     */
    public function withIdiomasNivel1(?string $idiomas_nivel1) : static
    {
        $new = clone $this;
        $new->idiomas_nivel1 = $idiomas_nivel1;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIdiomasNivel2() : ?string
    {
        return $this->idiomas_nivel2;
    }

    /**
     * @param null | string $idiomas_nivel2
     * @return static
     */
    public function withIdiomasNivel2(?string $idiomas_nivel2) : static
    {
        $new = clone $this;
        $new->idiomas_nivel2 = $idiomas_nivel2;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIdiomasNivel3() : ?string
    {
        return $this->idiomas_nivel3;
    }

    /**
     * @param null | string $idiomas_nivel3
     * @return static
     */
    public function withIdiomasNivel3(?string $idiomas_nivel3) : static
    {
        $new = clone $this;
        $new->idiomas_nivel3 = $idiomas_nivel3;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNomcoordina() : ?string
    {
        return $this->nomcoordina;
    }

    /**
     * @param null | string $nomcoordina
     * @return static
     */
    public function withNomcoordina(?string $nomcoordina) : static
    {
        $new = clone $this;
        $new->nomcoordina = $nomcoordina;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPromotorUa() : ?string
    {
        return $this->promotor_ua;
    }

    /**
     * @param null | string $promotor_ua
     * @return static
     */
    public function withPromotorUa(?string $promotor_ua) : static
    {
        $new = clone $this;
        $new->promotor_ua = $promotor_ua;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getWebUni() : ?string
    {
        return $this->web_uni;
    }

    /**
     * @param null | string $web_uni
     * @return static
     */
    public function withWebUni(?string $web_uni) : static
    {
        $new = clone $this;
        $new->web_uni = $web_uni;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getWebOficina() : ?string
    {
        return $this->web_oficina;
    }

    /**
     * @param null | string $web_oficina
     * @return static
     */
    public function withWebOficina(?string $web_oficina) : static
    {
        $new = clone $this;
        $new->web_oficina = $web_oficina;

        return $new;
    }
}

