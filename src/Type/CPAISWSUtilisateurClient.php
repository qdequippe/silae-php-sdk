<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSUtilisateurClient
{
    /**
     * @var string
     */
    private $Nom;

    /**
     * @var string
     */
    private $Prenom;

    /**
     * @var string
     */
    private $Mail;

    /**
     * @var string
     */
    private $Identifiant;

    /**
     * @var \DateTimeInterface
     */
    private $DebutValidite;

    /**
     * @var \DateTimeInterface
     */
    private $FinValidite;

    /**
     * @var bool
     */
    private $AccesComplet;

    /**
     * @var bool
     */
    private $AccesComplet_AvecParametrageSimplifie;

    /**
     * @var bool
     */
    private $AccesComplet_AvecParametrageComplet;

    /**
     * @var bool
     */
    private $AccesComplet_AccesBureautique;

    /**
     * @var bool
     */
    private $AccesComplet_AccesRelationClient;

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * @param string $Nom
     * @return CPAISWSUtilisateurClient
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
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * @param string $Prenom
     * @return CPAISWSUtilisateurClient
     */
    public function withPrenom($Prenom)
    {
        $new = clone $this;
        $new->Prenom = $Prenom;

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
     * @return CPAISWSUtilisateurClient
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
    public function getIdentifiant()
    {
        return $this->Identifiant;
    }

    /**
     * @param string $Identifiant
     * @return CPAISWSUtilisateurClient
     */
    public function withIdentifiant($Identifiant)
    {
        $new = clone $this;
        $new->Identifiant = $Identifiant;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDebutValidite()
    {
        return $this->DebutValidite;
    }

    /**
     * @param \DateTimeInterface $DebutValidite
     * @return CPAISWSUtilisateurClient
     */
    public function withDebutValidite($DebutValidite)
    {
        $new = clone $this;
        $new->DebutValidite = $DebutValidite;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getFinValidite()
    {
        return $this->FinValidite;
    }

    /**
     * @param \DateTimeInterface $FinValidite
     * @return CPAISWSUtilisateurClient
     */
    public function withFinValidite($FinValidite)
    {
        $new = clone $this;
        $new->FinValidite = $FinValidite;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAccesComplet()
    {
        return $this->AccesComplet;
    }

    /**
     * @param bool $AccesComplet
     * @return CPAISWSUtilisateurClient
     */
    public function withAccesComplet($AccesComplet)
    {
        $new = clone $this;
        $new->AccesComplet = $AccesComplet;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAccesComplet_AvecParametrageSimplifie()
    {
        return $this->AccesComplet_AvecParametrageSimplifie;
    }

    /**
     * @param bool $AccesComplet_AvecParametrageSimplifie
     * @return CPAISWSUtilisateurClient
     */
    public function withAccesComplet_AvecParametrageSimplifie($AccesComplet_AvecParametrageSimplifie)
    {
        $new = clone $this;
        $new->AccesComplet_AvecParametrageSimplifie = $AccesComplet_AvecParametrageSimplifie;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAccesComplet_AvecParametrageComplet()
    {
        return $this->AccesComplet_AvecParametrageComplet;
    }

    /**
     * @param bool $AccesComplet_AvecParametrageComplet
     * @return CPAISWSUtilisateurClient
     */
    public function withAccesComplet_AvecParametrageComplet($AccesComplet_AvecParametrageComplet)
    {
        $new = clone $this;
        $new->AccesComplet_AvecParametrageComplet = $AccesComplet_AvecParametrageComplet;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAccesComplet_AccesBureautique()
    {
        return $this->AccesComplet_AccesBureautique;
    }

    /**
     * @param bool $AccesComplet_AccesBureautique
     * @return CPAISWSUtilisateurClient
     */
    public function withAccesComplet_AccesBureautique($AccesComplet_AccesBureautique)
    {
        $new = clone $this;
        $new->AccesComplet_AccesBureautique = $AccesComplet_AccesBureautique;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAccesComplet_AccesRelationClient()
    {
        return $this->AccesComplet_AccesRelationClient;
    }

    /**
     * @param bool $AccesComplet_AccesRelationClient
     * @return CPAISWSUtilisateurClient
     */
    public function withAccesComplet_AccesRelationClient($AccesComplet_AccesRelationClient)
    {
        $new = clone $this;
        $new->AccesComplet_AccesRelationClient = $AccesComplet_AccesRelationClient;

        return $new;
    }
}

