<?php

namespace Clases;

use Phpro\SoapClient\Caller\Caller;
use Clases\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class Pub_gestdocenteClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param RequestInterface & Type\Wsagrupaciones $parameters
     * @return ResultInterface & Type\WsagrupacionesResponse
     * @throws SoapException
     */
    public function wsagrupaciones(\Clases\Type\Wsagrupaciones $parameters) : \Clases\Type\WsagrupacionesResponse
    {
        $response = ($this->caller)('wsagrupaciones', $parameters);

        \Psl\Type\instance_of(\Clases\Type\WsagrupacionesResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\Wsfechaexamenesasi $parameters
     * @return ResultInterface & Type\WsfechaexamenesasiResponse
     * @throws SoapException
     */
    public function wsfechaexamenesasi(\Clases\Type\Wsfechaexamenesasi $parameters) : \Clases\Type\WsfechaexamenesasiResponse
    {
        $response = ($this->caller)('wsfechaexamenesasi', $parameters);

        \Psl\Type\instance_of(\Clases\Type\WsfechaexamenesasiResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\Wsfechaexamenesasitotal $parameters
     * @return ResultInterface & Type\WsfechaexamenesasitotalResponse
     * @throws SoapException
     */
    public function wsfechaexamenesasitotal(\Clases\Type\Wsfechaexamenesasitotal $parameters) : \Clases\Type\WsfechaexamenesasitotalResponse
    {
        $response = ($this->caller)('wsfechaexamenesasitotal', $parameters);

        \Psl\Type\instance_of(\Clases\Type\WsfechaexamenesasitotalResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\Wsfechaexamenesasinue $parameters
     * @return ResultInterface & Type\WsfechaexamenesasinueResponse
     * @throws SoapException
     */
    public function wsfechaexamenesasinue(\Clases\Type\Wsfechaexamenesasinue $parameters) : \Clases\Type\WsfechaexamenesasinueResponse
    {
        $response = ($this->caller)('wsfechaexamenesasinue', $parameters);

        \Psl\Type\instance_of(\Clases\Type\WsfechaexamenesasinueResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\Wsfechaexamenesplan $parameters
     * @return ResultInterface & Type\WsfechaexamenesplanResponse
     * @throws SoapException
     */
    public function wsfechaexamenesplan(\Clases\Type\Wsfechaexamenesplan $parameters) : \Clases\Type\WsfechaexamenesplanResponse
    {
        $response = ($this->caller)('wsfechaexamenesplan', $parameters);

        \Psl\Type\instance_of(\Clases\Type\WsfechaexamenesplanResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\Wsasidepto $parameters
     * @return ResultInterface & Type\WsasideptoResponse
     * @throws SoapException
     */
    public function wsasidepto(\Clases\Type\Wsasidepto $parameters) : \Clases\Type\WsasideptoResponse
    {
        $response = ($this->caller)('wsasidepto', $parameters);

        \Psl\Type\instance_of(\Clases\Type\WsasideptoResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\Wsdatosasig $parameters
     * @return ResultInterface & Type\WsdatosasigResponse
     * @throws SoapException
     */
    public function wsdatosasig(\Clases\Type\Wsdatosasig $parameters) : \Clases\Type\WsdatosasigResponse
    {
        $response = ($this->caller)('wsdatosasig', $parameters);

        \Psl\Type\instance_of(\Clases\Type\WsdatosasigResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\Wshorarioagrp $parameters
     * @return ResultInterface & Type\WshorarioagrpResponse
     * @throws SoapException
     */
    public function wshorarioagrp(\Clases\Type\Wshorarioagrp $parameters) : \Clases\Type\WshorarioagrpResponse
    {
        $response = ($this->caller)('wshorarioagrp', $parameters);

        \Psl\Type\instance_of(\Clases\Type\WshorarioagrpResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\Wshorarios $parameters
     * @return ResultInterface & Type\WshorariosResponse
     * @throws SoapException
     */
    public function wshorarios(\Clases\Type\Wshorarios $parameters) : \Clases\Type\WshorariosResponse
    {
        $response = ($this->caller)('wshorarios', $parameters);

        \Psl\Type\instance_of(\Clases\Type\WshorariosResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\Wstitulosuni $parameters
     * @return ResultInterface & Type\WstitulosuniResponse
     * @throws SoapException
     */
    public function wstitulosuni(\Clases\Type\Wstitulosuni $parameters) : \Clases\Type\WstitulosuniResponse
    {
        $response = ($this->caller)('wstitulosuni', $parameters);

        \Psl\Type\instance_of(\Clases\Type\WstitulosuniResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\Wsdatosplan $parameters
     * @return ResultInterface & Type\WsdatosplanResponse
     * @throws SoapException
     */
    public function wsdatosplan(\Clases\Type\Wsdatosplan $parameters) : \Clases\Type\WsdatosplanResponse
    {
        $response = ($this->caller)('wsdatosplan', $parameters);

        \Psl\Type\instance_of(\Clases\Type\WsdatosplanResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\Wsplanesasig $parameters
     * @return ResultInterface & Type\WsplanesasigResponse
     * @throws SoapException
     */
    public function wsplanesasig(\Clases\Type\Wsplanesasig $parameters) : \Clases\Type\WsplanesasigResponse
    {
        $response = ($this->caller)('wsplanesasig', $parameters);

        \Psl\Type\instance_of(\Clases\Type\WsplanesasigResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\Wsplanesdep $parameters
     * @return ResultInterface & Type\WsplanesdepResponse
     * @throws SoapException
     */
    public function wsplanesdep(\Clases\Type\Wsplanesdep $parameters) : \Clases\Type\WsplanesdepResponse
    {
        $response = ($this->caller)('wsplanesdep', $parameters);

        \Psl\Type\instance_of(\Clases\Type\WsplanesdepResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\Wsdptoasig $parameters
     * @return ResultInterface & Type\WsdptoasigResponse
     * @throws SoapException
     */
    public function wsdptoasig(\Clases\Type\Wsdptoasig $parameters) : \Clases\Type\WsdptoasigResponse
    {
        $response = ($this->caller)('wsdptoasig', $parameters);

        \Psl\Type\instance_of(\Clases\Type\WsdptoasigResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\Wsareasdpto $parameters
     * @return ResultInterface & Type\WsareasdptoResponse
     * @throws SoapException
     */
    public function wsareasdpto(\Clases\Type\Wsareasdpto $parameters) : \Clases\Type\WsareasdptoResponse
    {
        $response = ($this->caller)('wsareasdpto', $parameters);

        \Psl\Type\instance_of(\Clases\Type\WsareasdptoResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\Wsdptocen $parameters
     * @return ResultInterface & Type\WsdptocenResponse
     * @throws SoapException
     */
    public function wsdptocen(\Clases\Type\Wsdptocen $parameters) : \Clases\Type\WsdptocenResponse
    {
        $response = ($this->caller)('wsdptocen', $parameters);

        \Psl\Type\instance_of(\Clases\Type\WsdptocenResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\Wsasiplan $parameters
     * @return ResultInterface & Type\WsasiplanResponse
     * @throws SoapException
     */
    public function wsasiplan(\Clases\Type\Wsasiplan $parameters) : \Clases\Type\WsasiplanResponse
    {
        $response = ($this->caller)('wsasiplan', $parameters);

        \Psl\Type\instance_of(\Clases\Type\WsasiplanResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\Wscalificaciones $parameters
     * @return ResultInterface & Type\WscalificacionesResponse
     * @throws SoapException
     */
    public function wscalificaciones(\Clases\Type\Wscalificaciones $parameters) : \Clases\Type\WscalificacionesResponse
    {
        $response = ($this->caller)('wscalificaciones', $parameters);

        \Psl\Type\instance_of(\Clases\Type\WscalificacionesResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\Wsconvocatorias $parameters
     * @return ResultInterface & Type\WsconvocatoriasResponse
     * @throws SoapException
     */
    public function wsconvocatorias(\Clases\Type\Wsconvocatorias $parameters) : \Clases\Type\WsconvocatoriasResponse
    {
        $response = ($this->caller)('wsconvocatorias', $parameters);

        \Psl\Type\instance_of(\Clases\Type\WsconvocatoriasResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\Wsgruposasi $parameters
     * @return ResultInterface & Type\WsgruposasiResponse
     * @throws SoapException
     */
    public function wsgruposasi(\Clases\Type\Wsgruposasi $parameters) : \Clases\Type\WsgruposasiResponse
    {
        $response = ($this->caller)('wsgruposasi', $parameters);

        \Psl\Type\instance_of(\Clases\Type\WsgruposasiResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\Wsconvemovilidad $parameters
     * @return ResultInterface & Type\WsconvemovilidadResponse
     * @throws SoapException
     */
    public function wsconvemovilidad(\Clases\Type\Wsconvemovilidad $parameters) : \Clases\Type\WsconvemovilidadResponse
    {
        $response = ($this->caller)('wsconvemovilidad', $parameters);

        \Psl\Type\instance_of(\Clases\Type\WsconvemovilidadResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\Wstitulospropiosuni $parameters
     * @return ResultInterface & Type\WstitulospropiosuniResponse
     * @throws SoapException
     */
    public function wstitulospropiosuni(\Clases\Type\Wstitulospropiosuni $parameters) : \Clases\Type\WstitulospropiosuniResponse
    {
        $response = ($this->caller)('wstitulospropiosuni', $parameters);

        \Psl\Type\instance_of(\Clases\Type\WstitulospropiosuniResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\Wsreqidiomab1plan $parameters
     * @return ResultInterface & Type\Wsreqidiomab1planResponse
     * @throws SoapException
     */
    public function wsreqidiomab1plan(\Clases\Type\Wsreqidiomab1plan $parameters) : \Clases\Type\Wsreqidiomab1planResponse
    {
        $response = ($this->caller)('wsreqidiomab1plan', $parameters);

        \Psl\Type\instance_of(\Clases\Type\Wsreqidiomab1planResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}

