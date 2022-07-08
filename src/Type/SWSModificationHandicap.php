<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSModificationHandicap implements RequestInterface
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
     * @var string
     */
    private $Matricule;

    /**
     * @var bool
     */
    private $SalarieHandicape;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSHandicap
     */
    private $Handicap;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $Matricule
     * @var bool $SalarieHandicape
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSHandicap $Handicap
     */
    public function __construct($Token, $NumeroDossier, $Matricule, $SalarieHandicape, $Handicap)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->Matricule = $Matricule;
        $this->SalarieHandicape = $SalarieHandicape;
        $this->Handicap = $Handicap;
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
     * @return SWSModificationHandicap
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
     * @return SWSModificationHandicap
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return string
     */
    public function getMatricule()
    {
        return $this->Matricule;
    }

    /**
     * @param string $Matricule
     * @return SWSModificationHandicap
     */
    public function withMatricule($Matricule)
    {
        $new = clone $this;
        $new->Matricule = $Matricule;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSalarieHandicape()
    {
        return $this->SalarieHandicape;
    }

    /**
     * @param bool $SalarieHandicape
     * @return SWSModificationHandicap
     */
    public function withSalarieHandicape($SalarieHandicape)
    {
        $new = clone $this;
        $new->SalarieHandicape = $SalarieHandicape;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSHandicap
     */
    public function getHandicap()
    {
        return $this->Handicap;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSHandicap $Handicap
     * @return SWSModificationHandicap
     */
    public function withHandicap($Handicap)
    {
        $new = clone $this;
        $new->Handicap = $Handicap;

        return $new;
    }
}

