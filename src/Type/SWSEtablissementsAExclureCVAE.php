<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSEtablissementsAExclureCVAE implements RequestInterface
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
    private $NomsInterneEtablissements;

    /**
     * @var bool
     */
    private $Exclure;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString $NomsInterneEtablissements
     * @var bool $Exclure
     */
    public function __construct($Token, $NumeroDossier, $NomsInterneEtablissements, $Exclure)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->NomsInterneEtablissements = $NomsInterneEtablissements;
        $this->Exclure = $Exclure;
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
     * @return SWSEtablissementsAExclureCVAE
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
     * @return SWSEtablissementsAExclureCVAE
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
    public function getNomsInterneEtablissements()
    {
        return $this->NomsInterneEtablissements;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $NomsInterneEtablissements
     * @return SWSEtablissementsAExclureCVAE
     */
    public function withNomsInterneEtablissements($NomsInterneEtablissements)
    {
        $new = clone $this;
        $new->NomsInterneEtablissements = $NomsInterneEtablissements;

        return $new;
    }

    /**
     * @return bool
     */
    public function getExclure()
    {
        return $this->Exclure;
    }

    /**
     * @param bool $Exclure
     * @return SWSEtablissementsAExclureCVAE
     */
    public function withExclure($Exclure)
    {
        $new = clone $this;
        $new->Exclure = $Exclure;

        return $new;
    }
}

