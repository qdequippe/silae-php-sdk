<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSSalarieDUE implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieDUE
     */
    private $SalarieDUE;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieDUE $SalarieDUE
     */
    public function __construct($Token, $NumeroDossier, $SalarieDUE)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->SalarieDUE = $SalarieDUE;
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
     * @return SWSSalarieDUE
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
     * @return SWSSalarieDUE
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieDUE
     */
    public function getSalarieDUE()
    {
        return $this->SalarieDUE;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieDUE $SalarieDUE
     * @return SWSSalarieDUE
     */
    public function withSalarieDUE($SalarieDUE)
    {
        $new = clone $this;
        $new->SalarieDUE = $SalarieDUE;

        return $new;
    }
}

