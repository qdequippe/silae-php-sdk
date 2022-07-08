<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSModificationGrilleHoraireEtablissement implements RequestInterface
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
    private $NomEtablissement;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationHoraireEtablissement
     */
    private $Horaire;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $NomEtablissement
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationHoraireEtablissement $Horaire
     */
    public function __construct($Token, $NumeroDossier, $NomEtablissement, $Horaire)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->NomEtablissement = $NomEtablissement;
        $this->Horaire = $Horaire;
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
     * @return SWSModificationGrilleHoraireEtablissement
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
     * @return SWSModificationGrilleHoraireEtablissement
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
    public function getNomEtablissement()
    {
        return $this->NomEtablissement;
    }

    /**
     * @param string $NomEtablissement
     * @return SWSModificationGrilleHoraireEtablissement
     */
    public function withNomEtablissement($NomEtablissement)
    {
        $new = clone $this;
        $new->NomEtablissement = $NomEtablissement;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationHoraireEtablissement
     */
    public function getHoraire()
    {
        return $this->Horaire;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationHoraireEtablissement $Horaire
     * @return SWSModificationGrilleHoraireEtablissement
     */
    public function withHoraire($Horaire)
    {
        $new = clone $this;
        $new->Horaire = $Horaire;

        return $new;
    }
}

