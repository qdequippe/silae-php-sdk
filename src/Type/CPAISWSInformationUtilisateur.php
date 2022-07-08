<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSInformationUtilisateur
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
    private $Nom;

    /**
     * @var string
     */
    private $Mail;

    /**
     * @var string
     */
    private $Agence;

    /**
     * @var string
     */
    private $TelBureau;

    /**
     * @var string
     */
    private $TelPortable;

    /**
     * @var string
     */
    private $TelDomicile;

    /**
     * @return string
     */
    public function getServeur()
    {
        return $this->Serveur;
    }

    /**
     * @param string $Serveur
     * @return CPAISWSInformationUtilisateur
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
     * @return CPAISWSInformationUtilisateur
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
     * @return CPAISWSInformationUtilisateur
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
     * @return CPAISWSInformationUtilisateur
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
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * @param string $Nom
     * @return CPAISWSInformationUtilisateur
     */
    public function withNom($Nom)
    {
        $new = clone $this;
        $new->Nom = $Nom;

        return $new;
    }

    /**
     * @return string
     */
    public function getMail()
    {
        return $this->Mail;
    }

    /**
     * @param string $Mail
     * @return CPAISWSInformationUtilisateur
     */
    public function withMail($Mail)
    {
        $new = clone $this;
        $new->Mail = $Mail;

        return $new;
    }

    /**
     * @return string
     */
    public function getAgence()
    {
        return $this->Agence;
    }

    /**
     * @param string $Agence
     * @return CPAISWSInformationUtilisateur
     */
    public function withAgence($Agence)
    {
        $new = clone $this;
        $new->Agence = $Agence;

        return $new;
    }

    /**
     * @return string
     */
    public function getTelBureau()
    {
        return $this->TelBureau;
    }

    /**
     * @param string $TelBureau
     * @return CPAISWSInformationUtilisateur
     */
    public function withTelBureau($TelBureau)
    {
        $new = clone $this;
        $new->TelBureau = $TelBureau;

        return $new;
    }

    /**
     * @return string
     */
    public function getTelPortable()
    {
        return $this->TelPortable;
    }

    /**
     * @param string $TelPortable
     * @return CPAISWSInformationUtilisateur
     */
    public function withTelPortable($TelPortable)
    {
        $new = clone $this;
        $new->TelPortable = $TelPortable;

        return $new;
    }

    /**
     * @return string
     */
    public function getTelDomicile()
    {
        return $this->TelDomicile;
    }

    /**
     * @param string $TelDomicile
     * @return CPAISWSInformationUtilisateur
     */
    public function withTelDomicile($TelDomicile)
    {
        $new = clone $this;
        $new->TelDomicile = $TelDomicile;

        return $new;
    }
}

