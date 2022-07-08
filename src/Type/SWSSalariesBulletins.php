<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSSalariesBulletins implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalariesBulletins
     */
    private $RequeteSalariesBulletins;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalariesBulletins $RequeteSalariesBulletins
     */
    public function __construct($Token, $NumeroDossier, $RequeteSalariesBulletins)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->RequeteSalariesBulletins = $RequeteSalariesBulletins;
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
     * @return SWSSalariesBulletins
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
     * @return SWSSalariesBulletins
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalariesBulletins
     */
    public function getRequeteSalariesBulletins()
    {
        return $this->RequeteSalariesBulletins;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalariesBulletins $RequeteSalariesBulletins
     * @return SWSSalariesBulletins
     */
    public function withRequeteSalariesBulletins($RequeteSalariesBulletins)
    {
        $new = clone $this;
        $new->RequeteSalariesBulletins = $RequeteSalariesBulletins;

        return $new;
    }
}

