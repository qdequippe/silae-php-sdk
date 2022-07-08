<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSInformationsDomaine
{
    /**
     * @var string
     */
    private $Serveur;

    /**
     * @var string
     */
    private $Entite;

    /**
     * @var string
     */
    private $Groupe;

    /**
     * @var string
     */
    private $NomDomaine;

    /**
     * @var string
     */
    private $NomAppelDomaine;

    /**
     * @var string
     */
    private $CodePostal;

    /**
     * @var string
     */
    private $Ville;

    /**
     * @return string
     */
    public function getServeur()
    {
        return $this->Serveur;
    }

    /**
     * @param string $Serveur
     * @return CPAISWSInformationsDomaine
     */
    public function withServeur($Serveur)
    {
        $new = clone $this;
        $new->Serveur = $Serveur;

        return $new;
    }

    /**
     * @return string
     */
    public function getEntite()
    {
        return $this->Entite;
    }

    /**
     * @param string $Entite
     * @return CPAISWSInformationsDomaine
     */
    public function withEntite($Entite)
    {
        $new = clone $this;
        $new->Entite = $Entite;

        return $new;
    }

    /**
     * @return string
     */
    public function getGroupe()
    {
        return $this->Groupe;
    }

    /**
     * @param string $Groupe
     * @return CPAISWSInformationsDomaine
     */
    public function withGroupe($Groupe)
    {
        $new = clone $this;
        $new->Groupe = $Groupe;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomDomaine()
    {
        return $this->NomDomaine;
    }

    /**
     * @param string $NomDomaine
     * @return CPAISWSInformationsDomaine
     */
    public function withNomDomaine($NomDomaine)
    {
        $new = clone $this;
        $new->NomDomaine = $NomDomaine;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomAppelDomaine()
    {
        return $this->NomAppelDomaine;
    }

    /**
     * @param string $NomAppelDomaine
     * @return CPAISWSInformationsDomaine
     */
    public function withNomAppelDomaine($NomAppelDomaine)
    {
        $new = clone $this;
        $new->NomAppelDomaine = $NomAppelDomaine;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodePostal()
    {
        return $this->CodePostal;
    }

    /**
     * @param string $CodePostal
     * @return CPAISWSInformationsDomaine
     */
    public function withCodePostal($CodePostal)
    {
        $new = clone $this;
        $new->CodePostal = $CodePostal;

        return $new;
    }

    /**
     * @return string
     */
    public function getVille()
    {
        return $this->Ville;
    }

    /**
     * @param string $Ville
     * @return CPAISWSInformationsDomaine
     */
    public function withVille($Ville)
    {
        $new = clone $this;
        $new->Ville = $Ville;

        return $new;
    }
}

