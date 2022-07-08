<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSInformationsOnglet
{
    /**
     * @var int
     */
    private $Nature;

    /**
     * @var string
     */
    private $Titre;

    /**
     * @var string
     */
    private $SousTitre;

    /**
     * @var string
     */
    private $Accueil_Url;

    /**
     * @var bool
     */
    private $ListeDossiers_Paie;

    /**
     * @var bool
     */
    private $ListeDossiers_Compta;

    /**
     * @var int
     */
    private $ID_CLIENT;

    /**
     * @var int
     */
    private $ID_DROIT;

    /**
     * @var int
     */
    private $ID_CTAEXERCICE;

    /**
     * @var int
     */
    private $ID_DOMAINE;

    /**
     * @var int
     */
    private $ID_PAISALARIE;

    /**
     * @var int
     */
    private $ID_SUPERVISEUR;

    /**
     * @return int
     */
    public function getNature()
    {
        return $this->Nature;
    }

    /**
     * @param int $Nature
     * @return SWSInformationsOnglet
     */
    public function withNature($Nature)
    {
        $new = clone $this;
        $new->Nature = $Nature;

        return $new;
    }

    /**
     * @return string
     */
    public function getTitre()
    {
        return $this->Titre;
    }

    /**
     * @param string $Titre
     * @return SWSInformationsOnglet
     */
    public function withTitre($Titre)
    {
        $new = clone $this;
        $new->Titre = $Titre;

        return $new;
    }

    /**
     * @return string
     */
    public function getSousTitre()
    {
        return $this->SousTitre;
    }

    /**
     * @param string $SousTitre
     * @return SWSInformationsOnglet
     */
    public function withSousTitre($SousTitre)
    {
        $new = clone $this;
        $new->SousTitre = $SousTitre;

        return $new;
    }

    /**
     * @return string
     */
    public function getAccueil_Url()
    {
        return $this->Accueil_Url;
    }

    /**
     * @param string $Accueil_Url
     * @return SWSInformationsOnglet
     */
    public function withAccueil_Url($Accueil_Url)
    {
        $new = clone $this;
        $new->Accueil_Url = $Accueil_Url;

        return $new;
    }

    /**
     * @return bool
     */
    public function getListeDossiers_Paie()
    {
        return $this->ListeDossiers_Paie;
    }

    /**
     * @param bool $ListeDossiers_Paie
     * @return SWSInformationsOnglet
     */
    public function withListeDossiers_Paie($ListeDossiers_Paie)
    {
        $new = clone $this;
        $new->ListeDossiers_Paie = $ListeDossiers_Paie;

        return $new;
    }

    /**
     * @return bool
     */
    public function getListeDossiers_Compta()
    {
        return $this->ListeDossiers_Compta;
    }

    /**
     * @param bool $ListeDossiers_Compta
     * @return SWSInformationsOnglet
     */
    public function withListeDossiers_Compta($ListeDossiers_Compta)
    {
        $new = clone $this;
        $new->ListeDossiers_Compta = $ListeDossiers_Compta;

        return $new;
    }

    /**
     * @return int
     */
    public function getID_CLIENT()
    {
        return $this->ID_CLIENT;
    }

    /**
     * @param int $ID_CLIENT
     * @return SWSInformationsOnglet
     */
    public function withID_CLIENT($ID_CLIENT)
    {
        $new = clone $this;
        $new->ID_CLIENT = $ID_CLIENT;

        return $new;
    }

    /**
     * @return int
     */
    public function getID_DROIT()
    {
        return $this->ID_DROIT;
    }

    /**
     * @param int $ID_DROIT
     * @return SWSInformationsOnglet
     */
    public function withID_DROIT($ID_DROIT)
    {
        $new = clone $this;
        $new->ID_DROIT = $ID_DROIT;

        return $new;
    }

    /**
     * @return int
     */
    public function getID_CTAEXERCICE()
    {
        return $this->ID_CTAEXERCICE;
    }

    /**
     * @param int $ID_CTAEXERCICE
     * @return SWSInformationsOnglet
     */
    public function withID_CTAEXERCICE($ID_CTAEXERCICE)
    {
        $new = clone $this;
        $new->ID_CTAEXERCICE = $ID_CTAEXERCICE;

        return $new;
    }

    /**
     * @return int
     */
    public function getID_DOMAINE()
    {
        return $this->ID_DOMAINE;
    }

    /**
     * @param int $ID_DOMAINE
     * @return SWSInformationsOnglet
     */
    public function withID_DOMAINE($ID_DOMAINE)
    {
        $new = clone $this;
        $new->ID_DOMAINE = $ID_DOMAINE;

        return $new;
    }

    /**
     * @return int
     */
    public function getID_PAISALARIE()
    {
        return $this->ID_PAISALARIE;
    }

    /**
     * @param int $ID_PAISALARIE
     * @return SWSInformationsOnglet
     */
    public function withID_PAISALARIE($ID_PAISALARIE)
    {
        $new = clone $this;
        $new->ID_PAISALARIE = $ID_PAISALARIE;

        return $new;
    }

    /**
     * @return int
     */
    public function getID_SUPERVISEUR()
    {
        return $this->ID_SUPERVISEUR;
    }

    /**
     * @param int $ID_SUPERVISEUR
     * @return SWSInformationsOnglet
     */
    public function withID_SUPERVISEUR($ID_SUPERVISEUR)
    {
        $new = clone $this;
        $new->ID_SUPERVISEUR = $ID_SUPERVISEUR;

        return $new;
    }
}

