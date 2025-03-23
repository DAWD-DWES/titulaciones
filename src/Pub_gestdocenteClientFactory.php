<?php

namespace Clases;

use Clases\Pub_gestdocenteClient;
use Clases\Pub_gestdocenteClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;

class Pub_gestdocenteClientFactory
{
    public static function factory(string $wsdl) : \Clases\Pub_gestdocenteClient
    {
        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(Pub_gestdocenteClassmap::getCollection())
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new Pub_gestdocenteClient($caller);
    }
}

