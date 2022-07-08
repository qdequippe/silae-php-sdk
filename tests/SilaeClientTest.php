<?php

namespace Qdequippe\SilaePhpSdk\Tests;

use PHPUnit\Framework\TestCase;
use Qdequippe\SilaePhpSdk\SilaeClientFactory;
use Qdequippe\SilaePhpSdk\Type\SWSAppliquerDroitEditeur;
use Qdequippe\SilaePhpSdk\Type\SWSListeDossiers;
use Qdequippe\SilaePhpSdk\Type\SWSLoginSimple;

final class SilaeClientTest extends TestCase
{
    public function testCall(): void
    {
        self::markTestSkipped('Use mocking instead');

        $client = SilaeClientFactory::factory('https://api.silaexpertXX.fr/silae/sws/sws.asmx?WSDL');

        $response = $client->sWS_LoginSimple(new SWSLoginSimple(
            'xxxx',
            'xxxx',
            'xxxx',
            'xxxx'
        ));

        $token = $response->getSWS_LoginSimpleResult();

        $client->sWS_AppliquerDroitEditeur(new SWSAppliquerDroitEditeur($token, 'xxxxx', 'xxxx'));

        $response = $client->sWS_ListeDossiers(new SWSListeDossiers($token, 1));

        self::assertNotEmpty($response->getSWS_ListeDossiersResult()->getListeDossiers());
    }
}
