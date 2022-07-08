<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSSpectacleCreation implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSpectacle
     */
    private $StructSpectacle;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSpectacle $StructSpectacle
     */
    public function __construct($Token, $NumeroDossier, $StructSpectacle)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->StructSpectacle = $StructSpectacle;
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
     * @return SWSSpectacleCreation
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
     * @return SWSSpectacleCreation
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSpectacle
     */
    public function getStructSpectacle()
    {
        return $this->StructSpectacle;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSpectacle $StructSpectacle
     * @return SWSSpectacleCreation
     */
    public function withStructSpectacle($StructSpectacle)
    {
        $new = clone $this;
        $new->StructSpectacle = $StructSpectacle;

        return $new;
    }
}

