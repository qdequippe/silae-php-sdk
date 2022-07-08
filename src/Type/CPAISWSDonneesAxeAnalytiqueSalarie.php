<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSDonneesAxeAnalytiqueSalarie
{
    /**
     * @var string
     */
    private $TitreCategorie;

    /**
     * @var string
     */
    private $SousCategorieParDefaut;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSousCategoriesEnPC
     */
    private $SousCategoriesEnPC;

    /**
     * @return string
     */
    public function getTitreCategorie()
    {
        return $this->TitreCategorie;
    }

    /**
     * @param string $TitreCategorie
     * @return CPAISWSDonneesAxeAnalytiqueSalarie
     */
    public function withTitreCategorie($TitreCategorie)
    {
        $new = clone $this;
        $new->TitreCategorie = $TitreCategorie;

        return $new;
    }

    /**
     * @return string
     */
    public function getSousCategorieParDefaut()
    {
        return $this->SousCategorieParDefaut;
    }

    /**
     * @param string $SousCategorieParDefaut
     * @return CPAISWSDonneesAxeAnalytiqueSalarie
     */
    public function withSousCategorieParDefaut($SousCategorieParDefaut)
    {
        $new = clone $this;
        $new->SousCategorieParDefaut = $SousCategorieParDefaut;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSousCategoriesEnPC
     */
    public function getSousCategoriesEnPC()
    {
        return $this->SousCategoriesEnPC;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSousCategoriesEnPC $SousCategoriesEnPC
     * @return CPAISWSDonneesAxeAnalytiqueSalarie
     */
    public function withSousCategoriesEnPC($SousCategoriesEnPC)
    {
        $new = clone $this;
        $new->SousCategoriesEnPC = $SousCategoriesEnPC;

        return $new;
    }
}

