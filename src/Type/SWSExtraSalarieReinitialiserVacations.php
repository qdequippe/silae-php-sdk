<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSExtraSalarieReinitialiserVacations implements RequestInterface
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
    private $Categorie;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteExtraSalarieVacations
     */
    private $RequeteExtraSalarieVacations;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $Categorie
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteExtraSalarieVacations $RequeteExtraSalarieVacations
     */
    public function __construct($Token, $NumeroDossier, $Categorie, $RequeteExtraSalarieVacations)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->Categorie = $Categorie;
        $this->RequeteExtraSalarieVacations = $RequeteExtraSalarieVacations;
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
     * @return SWSExtraSalarieReinitialiserVacations
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
     * @return SWSExtraSalarieReinitialiserVacations
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
    public function getCategorie()
    {
        return $this->Categorie;
    }

    /**
     * @param string $Categorie
     * @return SWSExtraSalarieReinitialiserVacations
     */
    public function withCategorie($Categorie)
    {
        $new = clone $this;
        $new->Categorie = $Categorie;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteExtraSalarieVacations
     */
    public function getRequeteExtraSalarieVacations()
    {
        return $this->RequeteExtraSalarieVacations;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteExtraSalarieVacations $RequeteExtraSalarieVacations
     * @return SWSExtraSalarieReinitialiserVacations
     */
    public function withRequeteExtraSalarieVacations($RequeteExtraSalarieVacations)
    {
        $new = clone $this;
        $new->RequeteExtraSalarieVacations = $RequeteExtraSalarieVacations;

        return $new;
    }
}

