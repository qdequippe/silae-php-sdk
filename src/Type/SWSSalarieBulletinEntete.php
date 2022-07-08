<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSSalarieBulletinEntete implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalarieBulletinEntete
     */
    private $RequeteSalarieBulletinEntete;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalarieBulletinEntete $RequeteSalarieBulletinEntete
     */
    public function __construct($Token, $NumeroDossier, $RequeteSalarieBulletinEntete)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->RequeteSalarieBulletinEntete = $RequeteSalarieBulletinEntete;
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
     * @return SWSSalarieBulletinEntete
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
     * @return SWSSalarieBulletinEntete
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalarieBulletinEntete
     */
    public function getRequeteSalarieBulletinEntete()
    {
        return $this->RequeteSalarieBulletinEntete;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalarieBulletinEntete $RequeteSalarieBulletinEntete
     * @return SWSSalarieBulletinEntete
     */
    public function withRequeteSalarieBulletinEntete($RequeteSalarieBulletinEntete)
    {
        $new = clone $this;
        $new->RequeteSalarieBulletinEntete = $RequeteSalarieBulletinEntete;

        return $new;
    }
}

