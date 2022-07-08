<?php

namespace Qdequippe\SilaePhpSdk;

use Qdequippe\SilaePhpSdk\SilaeClient;
use Qdequippe\SilaePhpSdk\SilaeClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;

class SilaeClientFactory
{
    public static function factory(string $wsdl) : \Qdequippe\SilaePhpSdk\SilaeClient
    {
        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(SilaeClassmap::getCollection())
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new SilaeClient($caller);
    }
}

