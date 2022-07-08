<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSModificationSalarieProtege implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieProtege
     */
    private $SalarieProtege;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $Matricule
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieProtege $SalarieProtege
     */
    public function __construct($Token, $NumeroDossier, $Matricule, $SalarieProtege)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->Matricule = $Matricule;
        $this->SalarieProtege = $SalarieProtege;
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
     * @return SWSModificationSalarieProtege
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
     * @return SWSModificationSalarieProtege
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
     * @return SWSModificationSalarieProtege
     */
    public function withMatricule($Matricule)
    {
        $new = clone $this;
        $new->Matricule = $Matricule;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieProtege
     */
    public function getSalarieProtege()
    {
        return $this->SalarieProtege;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieProtege $SalarieProtege
     * @return SWSModificationSalarieProtege
     */
    public function withSalarieProtege($SalarieProtege)
    {
        $new = clone $this;
        $new->SalarieProtege = $SalarieProtege;

        return $new;
    }
}

