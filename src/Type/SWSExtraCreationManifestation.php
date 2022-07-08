<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSExtraCreationManifestation implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSExtraManifestation
     */
    private $StructManifestation;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $Categorie
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSExtraManifestation $StructManifestation
     */
    public function __construct($Token, $NumeroDossier, $Categorie, $StructManifestation)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->Categorie = $Categorie;
        $this->StructManifestation = $StructManifestation;
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
     * @return SWSExtraCreationManifestation
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
     * @return SWSExtraCreationManifestation
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
     * @return SWSExtraCreationManifestation
     */
    public function withCategorie($Categorie)
    {
        $new = clone $this;
        $new->Categorie = $Categorie;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSExtraManifestation
     */
    public function getStructManifestation()
    {
        return $this->StructManifestation;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSExtraManifestation $StructManifestation
     * @return SWSExtraCreationManifestation
     */
    public function withStructManifestation($StructManifestation)
    {
        $new = clone $this;
        $new->StructManifestation = $StructManifestation;

        return $new;
    }
}

