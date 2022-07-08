<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSExtraSalarieAjouterVacations implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSExtraSalarieVacations
     */
    private $ExtraSalarieVacations;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $Categorie
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSExtraSalarieVacations $ExtraSalarieVacations
     */
    public function __construct($Token, $NumeroDossier, $Categorie, $ExtraSalarieVacations)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->Categorie = $Categorie;
        $this->ExtraSalarieVacations = $ExtraSalarieVacations;
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
     * @return SWSExtraSalarieAjouterVacations
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
     * @return SWSExtraSalarieAjouterVacations
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
     * @return SWSExtraSalarieAjouterVacations
     */
    public function withCategorie($Categorie)
    {
        $new = clone $this;
        $new->Categorie = $Categorie;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSExtraSalarieVacations
     */
    public function getExtraSalarieVacations()
    {
        return $this->ExtraSalarieVacations;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSExtraSalarieVacations $ExtraSalarieVacations
     * @return SWSExtraSalarieAjouterVacations
     */
    public function withExtraSalarieVacations($ExtraSalarieVacations)
    {
        $new = clone $this;
        $new->ExtraSalarieVacations = $ExtraSalarieVacations;

        return $new;
    }
}

