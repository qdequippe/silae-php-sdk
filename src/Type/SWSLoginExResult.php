<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSLoginExResult
{
    /**
     * @var string
     */
    private $AdresseFermeDistante;

    /**
     * @var string
     */
    private $RepartiteurAdresse;

    /**
     * @var string
     */
    private $Token;

    /**
     * @var int
     */
    private $NatureUtilisateur;

    /**
     * @var string
     */
    private $NomUtilisateur;

    /**
     * @var string
     */
    private $NomDomaine;

    /**
     * @var int
     */
    private $LangueUtilisateur;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfSWSInformationsOnglet
     */
    private $ListeOnglets;

    /**
     * @return string
     */
    public function getAdresseFermeDistante()
    {
        return $this->AdresseFermeDistante;
    }

    /**
     * @param string $AdresseFermeDistante
     * @return SWSLoginExResult
     */
    public function withAdresseFermeDistante($AdresseFermeDistante)
    {
        $new = clone $this;
        $new->AdresseFermeDistante = $AdresseFermeDistante;

        return $new;
    }

    /**
     * @return string
     */
    public function getRepartiteurAdresse()
    {
        return $this->RepartiteurAdresse;
    }

    /**
     * @param string $RepartiteurAdresse
     * @return SWSLoginExResult
     */
    public function withRepartiteurAdresse($RepartiteurAdresse)
    {
        $new = clone $this;
        $new->RepartiteurAdresse = $RepartiteurAdresse;

        return $new;
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
     * @return SWSLoginExResult
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return int
     */
    public function getNatureUtilisateur()
    {
        return $this->NatureUtilisateur;
    }

    /**
     * @param int $NatureUtilisateur
     * @return SWSLoginExResult
     */
    public function withNatureUtilisateur($NatureUtilisateur)
    {
        $new = clone $this;
        $new->NatureUtilisateur = $NatureUtilisateur;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomUtilisateur()
    {
        return $this->NomUtilisateur;
    }

    /**
     * @param string $NomUtilisateur
     * @return SWSLoginExResult
     */
    public function withNomUtilisateur($NomUtilisateur)
    {
        $new = clone $this;
        $new->NomUtilisateur = $NomUtilisateur;

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
     * @return SWSLoginExResult
     */
    public function withNomDomaine($NomDomaine)
    {
        $new = clone $this;
        $new->NomDomaine = $NomDomaine;

        return $new;
    }

    /**
     * @return int
     */
    public function getLangueUtilisateur()
    {
        return $this->LangueUtilisateur;
    }

    /**
     * @param int $LangueUtilisateur
     * @return SWSLoginExResult
     */
    public function withLangueUtilisateur($LangueUtilisateur)
    {
        $new = clone $this;
        $new->LangueUtilisateur = $LangueUtilisateur;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfSWSInformationsOnglet
     */
    public function getListeOnglets()
    {
        return $this->ListeOnglets;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfSWSInformationsOnglet $ListeOnglets
     * @return SWSLoginExResult
     */
    public function withListeOnglets($ListeOnglets)
    {
        $new = clone $this;
        $new->ListeOnglets = $ListeOnglets;

        return $new;
    }
}

