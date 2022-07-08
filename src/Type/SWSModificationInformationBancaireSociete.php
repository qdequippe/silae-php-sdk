<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSModificationInformationBancaireSociete implements RequestInterface
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
     * @var int
     */
    private $SepaModeComptabilisation;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSInformationBancaireSociete
     */
    private $InformationBancaireSociete;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var int $SepaModeComptabilisation
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSInformationBancaireSociete $InformationBancaireSociete
     */
    public function __construct($Token, $NumeroDossier, $SepaModeComptabilisation, $InformationBancaireSociete)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->SepaModeComptabilisation = $SepaModeComptabilisation;
        $this->InformationBancaireSociete = $InformationBancaireSociete;
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
     * @return SWSModificationInformationBancaireSociete
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
     * @return SWSModificationInformationBancaireSociete
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return int
     */
    public function getSepaModeComptabilisation()
    {
        return $this->SepaModeComptabilisation;
    }

    /**
     * @param int $SepaModeComptabilisation
     * @return SWSModificationInformationBancaireSociete
     */
    public function withSepaModeComptabilisation($SepaModeComptabilisation)
    {
        $new = clone $this;
        $new->SepaModeComptabilisation = $SepaModeComptabilisation;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSInformationBancaireSociete
     */
    public function getInformationBancaireSociete()
    {
        return $this->InformationBancaireSociete;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSInformationBancaireSociete $InformationBancaireSociete
     * @return SWSModificationInformationBancaireSociete
     */
    public function withInformationBancaireSociete($InformationBancaireSociete)
    {
        $new = clone $this;
        $new->InformationBancaireSociete = $InformationBancaireSociete;

        return $new;
    }
}

