<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSAffectationDossierPaie implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $Affectation;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString $Affectation
     */
    public function __construct($Token, $NumeroDossier, $Affectation)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->Affectation = $Affectation;
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
     * @return SWSAffectationDossierPaie
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
     * @return SWSAffectationDossierPaie
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getAffectation()
    {
        return $this->Affectation;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $Affectation
     * @return SWSAffectationDossierPaie
     */
    public function withAffectation($Affectation)
    {
        $new = clone $this;
        $new->Affectation = $Affectation;

        return $new;
    }
}

