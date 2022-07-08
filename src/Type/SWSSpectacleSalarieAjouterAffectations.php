<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSSpectacleSalarieAjouterAffectations implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSpectacleSalarieAffectations
     */
    private $StructSpectacleSalarieAffectations;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSpectacleSalarieAffectations $StructSpectacleSalarieAffectations
     */
    public function __construct($Token, $NumeroDossier, $StructSpectacleSalarieAffectations)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->StructSpectacleSalarieAffectations = $StructSpectacleSalarieAffectations;
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
     * @return SWSSpectacleSalarieAjouterAffectations
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
     * @return SWSSpectacleSalarieAjouterAffectations
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSpectacleSalarieAffectations
     */
    public function getStructSpectacleSalarieAffectations()
    {
        return $this->StructSpectacleSalarieAffectations;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSpectacleSalarieAffectations $StructSpectacleSalarieAffectations
     * @return SWSSpectacleSalarieAjouterAffectations
     */
    public function withStructSpectacleSalarieAffectations($StructSpectacleSalarieAffectations)
    {
        $new = clone $this;
        $new->StructSpectacleSalarieAffectations = $StructSpectacleSalarieAffectations;

        return $new;
    }
}

