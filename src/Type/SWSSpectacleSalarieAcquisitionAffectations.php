<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSSpectacleSalarieAcquisitionAffectations implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSpectacleSalarieAffectations
     */
    private $RequeteSpectacleSalarieAffectations;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSpectacleSalarieAffectations $RequeteSpectacleSalarieAffectations
     */
    public function __construct($Token, $NumeroDossier, $RequeteSpectacleSalarieAffectations)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->RequeteSpectacleSalarieAffectations = $RequeteSpectacleSalarieAffectations;
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
     * @return SWSSpectacleSalarieAcquisitionAffectations
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
     * @return SWSSpectacleSalarieAcquisitionAffectations
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSpectacleSalarieAffectations
     */
    public function getRequeteSpectacleSalarieAffectations()
    {
        return $this->RequeteSpectacleSalarieAffectations;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSpectacleSalarieAffectations $RequeteSpectacleSalarieAffectations
     * @return SWSSpectacleSalarieAcquisitionAffectations
     */
    public function withRequeteSpectacleSalarieAffectations($RequeteSpectacleSalarieAffectations)
    {
        $new = clone $this;
        $new->RequeteSpectacleSalarieAffectations = $RequeteSpectacleSalarieAffectations;

        return $new;
    }
}

