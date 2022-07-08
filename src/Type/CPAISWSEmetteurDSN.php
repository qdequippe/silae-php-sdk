<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSEmetteurDSN
{
    /**
     * @var string
     */
    private $NumeroDossier;

    /**
     * @var int
     */
    private $Civilite;

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
    private $Siret;

    /**
     * @var int
     */
    private $Affectation;

    /**
     * @var string
     */
    private $Mail;

    /**
     * @var string
     */
    private $Telephone;

    /**
     * @var int
     */
    private $ChoixAdresse;

    /**
     * @var string
     */
    private $CodeAgence;

    /**
     * @var string
     */
    private $RaisonSociale;

    /**
     * @var string
     */
    private $NumVoie;

    /**
     * @var string
     */
    private $BTQC;

    /**
     * @var string
     */
    private $NomVoie;

    /**
     * @var string
     */
    private $CodePostal;

    /**
     * @var string
     */
    private $NomVille;

    /**
     * @return string
     */
    public function getNumeroDossier()
    {
        return $this->NumeroDossier;
    }

    /**
     * @param string $NumeroDossier
     * @return CPAISWSEmetteurDSN
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return int
     */
    public function getCivilite()
    {
        return $this->Civilite;
    }

    /**
     * @param int $Civilite
     * @return CPAISWSEmetteurDSN
     */
    public function withCivilite($Civilite)
    {
        $new = clone $this;
        $new->Civilite = $Civilite;

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
     * @return CPAISWSEmetteurDSN
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
     * @return CPAISWSEmetteurDSN
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
    public function getSiret()
    {
        return $this->Siret;
    }

    /**
     * @param string $Siret
     * @return CPAISWSEmetteurDSN
     */
    public function withSiret($Siret)
    {
        $new = clone $this;
        $new->Siret = $Siret;

        return $new;
    }

    /**
     * @return int
     */
    public function getAffectation()
    {
        return $this->Affectation;
    }

    /**
     * @param int $Affectation
     * @return CPAISWSEmetteurDSN
     */
    public function withAffectation($Affectation)
    {
        $new = clone $this;
        $new->Affectation = $Affectation;

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
     * @return CPAISWSEmetteurDSN
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
    public function getTelephone()
    {
        return $this->Telephone;
    }

    /**
     * @param string $Telephone
     * @return CPAISWSEmetteurDSN
     */
    public function withTelephone($Telephone)
    {
        $new = clone $this;
        $new->Telephone = $Telephone;

        return $new;
    }

    /**
     * @return int
     */
    public function getChoixAdresse()
    {
        return $this->ChoixAdresse;
    }

    /**
     * @param int $ChoixAdresse
     * @return CPAISWSEmetteurDSN
     */
    public function withChoixAdresse($ChoixAdresse)
    {
        $new = clone $this;
        $new->ChoixAdresse = $ChoixAdresse;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeAgence()
    {
        return $this->CodeAgence;
    }

    /**
     * @param string $CodeAgence
     * @return CPAISWSEmetteurDSN
     */
    public function withCodeAgence($CodeAgence)
    {
        $new = clone $this;
        $new->CodeAgence = $CodeAgence;

        return $new;
    }

    /**
     * @return string
     */
    public function getRaisonSociale()
    {
        return $this->RaisonSociale;
    }

    /**
     * @param string $RaisonSociale
     * @return CPAISWSEmetteurDSN
     */
    public function withRaisonSociale($RaisonSociale)
    {
        $new = clone $this;
        $new->RaisonSociale = $RaisonSociale;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumVoie()
    {
        return $this->NumVoie;
    }

    /**
     * @param string $NumVoie
     * @return CPAISWSEmetteurDSN
     */
    public function withNumVoie($NumVoie)
    {
        $new = clone $this;
        $new->NumVoie = $NumVoie;

        return $new;
    }

    /**
     * @return string
     */
    public function getBTQC()
    {
        return $this->BTQC;
    }

    /**
     * @param string $BTQC
     * @return CPAISWSEmetteurDSN
     */
    public function withBTQC($BTQC)
    {
        $new = clone $this;
        $new->BTQC = $BTQC;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomVoie()
    {
        return $this->NomVoie;
    }

    /**
     * @param string $NomVoie
     * @return CPAISWSEmetteurDSN
     */
    public function withNomVoie($NomVoie)
    {
        $new = clone $this;
        $new->NomVoie = $NomVoie;

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
     * @return CPAISWSEmetteurDSN
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
    public function getNomVille()
    {
        return $this->NomVille;
    }

    /**
     * @param string $NomVille
     * @return CPAISWSEmetteurDSN
     */
    public function withNomVille($NomVille)
    {
        $new = clone $this;
        $new->NomVille = $NomVille;

        return $new;
    }
}

