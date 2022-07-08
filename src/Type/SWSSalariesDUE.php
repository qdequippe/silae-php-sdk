<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSSalariesDUE implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalariesDUE
     */
    private $RequeteSalariesDUE;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalariesDUE $RequeteSalariesDUE
     */
    public function __construct($Token, $NumeroDossier, $RequeteSalariesDUE)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->RequeteSalariesDUE = $RequeteSalariesDUE;
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
     * @return SWSSalariesDUE
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
     * @return SWSSalariesDUE
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalariesDUE
     */
    public function getRequeteSalariesDUE()
    {
        return $this->RequeteSalariesDUE;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalariesDUE $RequeteSalariesDUE
     * @return SWSSalariesDUE
     */
    public function withRequeteSalariesDUE($RequeteSalariesDUE)
    {
        $new = clone $this;
        $new->RequeteSalariesDUE = $RequeteSalariesDUE;

        return $new;
    }
}

