<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSSalarieBulletinLignes implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var string
     */
    private $NumeroDossier;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalarieBulletinLignes
     */
    private $RequeteSalarieBulletinLignes;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalarieBulletinLignes $RequeteSalarieBulletinLignes
     */
    public function __construct($Token, $NumeroDossier, $RequeteSalarieBulletinLignes)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->RequeteSalarieBulletinLignes = $RequeteSalarieBulletinLignes;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param string $Token
     * @return SWSSalarieBulletinLignes
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumeroDossier()
    {
        return $this->NumeroDossier;
    }

    /**
     * @param string $NumeroDossier
     * @return SWSSalarieBulletinLignes
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalarieBulletinLignes
     */
    public function getRequeteSalarieBulletinLignes()
    {
        return $this->RequeteSalarieBulletinLignes;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalarieBulletinLignes $RequeteSalarieBulletinLignes
     * @return SWSSalarieBulletinLignes
     */
    public function withRequeteSalarieBulletinLignes($RequeteSalarieBulletinLignes)
    {
        $new = clone $this;
        $new->RequeteSalarieBulletinLignes = $RequeteSalarieBulletinLignes;

        return $new;
    }
}

