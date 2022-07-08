<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSAjoutSousCategorieAxeAnalytique implements RequestInterface
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
    private $NomAxe;

    /**
     * @var string
     */
    private $NomSousCategorie;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $NomAxe
     * @var string $NomSousCategorie
     */
    public function __construct($Token, $NumeroDossier, $NomAxe, $NomSousCategorie)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->NomAxe = $NomAxe;
        $this->NomSousCategorie = $NomSousCategorie;
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
     * @return SWSAjoutSousCategorieAxeAnalytique
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
     * @return SWSAjoutSousCategorieAxeAnalytique
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
    public function getNomAxe()
    {
        return $this->NomAxe;
    }

    /**
     * @param string $NomAxe
     * @return SWSAjoutSousCategorieAxeAnalytique
     */
    public function withNomAxe($NomAxe)
    {
        $new = clone $this;
        $new->NomAxe = $NomAxe;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomSousCategorie()
    {
        return $this->NomSousCategorie;
    }

    /**
     * @param string $NomSousCategorie
     * @return SWSAjoutSousCategorieAxeAnalytique
     */
    public function withNomSousCategorie($NomSousCategorie)
    {
        $new = clone $this;
        $new->NomSousCategorie = $NomSousCategorie;

        return $new;
    }
}

