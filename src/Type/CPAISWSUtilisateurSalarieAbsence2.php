<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSUtilisateurSalarieAbsence2
{
    /**
     * @var int
     */
    private $ID_PAIABSENCE;

    /**
     * @var \DateTimeInterface
     */
    private $ABS_DtDeb;

    /**
     * @var \DateTimeInterface
     */
    private $ABS_DtFin;

    /**
     * @var string
     */
    private $ABS_CodeAbsence;

    /**
     * @var string
     */
    private $ABS_Libelle;

    /**
     * @var \DateTimeInterface
     */
    private $ABS_DemandeDate;

    /**
     * @var string
     */
    private $ABS_DemandeIdentifiantUtilisateur;

    /**
     * @var \DateTimeInterface
     */
    private $ABS_ValidationDate;

    /**
     * @var string
     */
    private $ABS_ValidationIdentifiantUtilisateur;

    /**
     * @var string
     */
    private $ABS_S46_G01_00_001;

    /**
     * @var int
     */
    private $Couleur;

    /**
     * @var float
     */
    private $DureeEnHeuresSiJourUnique;

    /**
     * @var float
     */
    private $DureeEnJoursSiJourUnique;

    /**
     * @var string
     */
    private $Commentaires;

    /**
     * @var bool
     */
    private $EstDansBulletin;

    /**
     * @var int
     */
    private $ID_PAISALARIE;

    /**
     * @var string
     */
    private $Matricule;

    /**
     * @var string
     */
    private $NomSalarie;

    /**
     * @return int
     */
    public function getID_PAIABSENCE()
    {
        return $this->ID_PAIABSENCE;
    }

    /**
     * @param int $ID_PAIABSENCE
     * @return CPAISWSUtilisateurSalarieAbsence2
     */
    public function withID_PAIABSENCE($ID_PAIABSENCE)
    {
        $new = clone $this;
        $new->ID_PAIABSENCE = $ID_PAIABSENCE;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getABS_DtDeb()
    {
        return $this->ABS_DtDeb;
    }

    /**
     * @param \DateTimeInterface $ABS_DtDeb
     * @return CPAISWSUtilisateurSalarieAbsence2
     */
    public function withABS_DtDeb($ABS_DtDeb)
    {
        $new = clone $this;
        $new->ABS_DtDeb = $ABS_DtDeb;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getABS_DtFin()
    {
        return $this->ABS_DtFin;
    }

    /**
     * @param \DateTimeInterface $ABS_DtFin
     * @return CPAISWSUtilisateurSalarieAbsence2
     */
    public function withABS_DtFin($ABS_DtFin)
    {
        $new = clone $this;
        $new->ABS_DtFin = $ABS_DtFin;

        return $new;
    }

    /**
     * @return string
     */
    public function getABS_CodeAbsence()
    {
        return $this->ABS_CodeAbsence;
    }

    /**
     * @param string $ABS_CodeAbsence
     * @return CPAISWSUtilisateurSalarieAbsence2
     */
    public function withABS_CodeAbsence($ABS_CodeAbsence)
    {
        $new = clone $this;
        $new->ABS_CodeAbsence = $ABS_CodeAbsence;

        return $new;
    }

    /**
     * @return string
     */
    public function getABS_Libelle()
    {
        return $this->ABS_Libelle;
    }

    /**
     * @param string $ABS_Libelle
     * @return CPAISWSUtilisateurSalarieAbsence2
     */
    public function withABS_Libelle($ABS_Libelle)
    {
        $new = clone $this;
        $new->ABS_Libelle = $ABS_Libelle;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getABS_DemandeDate()
    {
        return $this->ABS_DemandeDate;
    }

    /**
     * @param \DateTimeInterface $ABS_DemandeDate
     * @return CPAISWSUtilisateurSalarieAbsence2
     */
    public function withABS_DemandeDate($ABS_DemandeDate)
    {
        $new = clone $this;
        $new->ABS_DemandeDate = $ABS_DemandeDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getABS_DemandeIdentifiantUtilisateur()
    {
        return $this->ABS_DemandeIdentifiantUtilisateur;
    }

    /**
     * @param string $ABS_DemandeIdentifiantUtilisateur
     * @return CPAISWSUtilisateurSalarieAbsence2
     */
    public function withABS_DemandeIdentifiantUtilisateur($ABS_DemandeIdentifiantUtilisateur)
    {
        $new = clone $this;
        $new->ABS_DemandeIdentifiantUtilisateur = $ABS_DemandeIdentifiantUtilisateur;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getABS_ValidationDate()
    {
        return $this->ABS_ValidationDate;
    }

    /**
     * @param \DateTimeInterface $ABS_ValidationDate
     * @return CPAISWSUtilisateurSalarieAbsence2
     */
    public function withABS_ValidationDate($ABS_ValidationDate)
    {
        $new = clone $this;
        $new->ABS_ValidationDate = $ABS_ValidationDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getABS_ValidationIdentifiantUtilisateur()
    {
        return $this->ABS_ValidationIdentifiantUtilisateur;
    }

    /**
     * @param string $ABS_ValidationIdentifiantUtilisateur
     * @return CPAISWSUtilisateurSalarieAbsence2
     */
    public function withABS_ValidationIdentifiantUtilisateur($ABS_ValidationIdentifiantUtilisateur)
    {
        $new = clone $this;
        $new->ABS_ValidationIdentifiantUtilisateur = $ABS_ValidationIdentifiantUtilisateur;

        return $new;
    }

    /**
     * @return string
     */
    public function getABS_S46_G01_00_001()
    {
        return $this->ABS_S46_G01_00_001;
    }

    /**
     * @param string $ABS_S46_G01_00_001
     * @return CPAISWSUtilisateurSalarieAbsence2
     */
    public function withABS_S46_G01_00_001($ABS_S46_G01_00_001)
    {
        $new = clone $this;
        $new->ABS_S46_G01_00_001 = $ABS_S46_G01_00_001;

        return $new;
    }

    /**
     * @return int
     */
    public function getCouleur()
    {
        return $this->Couleur;
    }

    /**
     * @param int $Couleur
     * @return CPAISWSUtilisateurSalarieAbsence2
     */
    public function withCouleur($Couleur)
    {
        $new = clone $this;
        $new->Couleur = $Couleur;

        return $new;
    }

    /**
     * @return float
     */
    public function getDureeEnHeuresSiJourUnique()
    {
        return $this->DureeEnHeuresSiJourUnique;
    }

    /**
     * @param float $DureeEnHeuresSiJourUnique
     * @return CPAISWSUtilisateurSalarieAbsence2
     */
    public function withDureeEnHeuresSiJourUnique($DureeEnHeuresSiJourUnique)
    {
        $new = clone $this;
        $new->DureeEnHeuresSiJourUnique = $DureeEnHeuresSiJourUnique;

        return $new;
    }

    /**
     * @return float
     */
    public function getDureeEnJoursSiJourUnique()
    {
        return $this->DureeEnJoursSiJourUnique;
    }

    /**
     * @param float $DureeEnJoursSiJourUnique
     * @return CPAISWSUtilisateurSalarieAbsence2
     */
    public function withDureeEnJoursSiJourUnique($DureeEnJoursSiJourUnique)
    {
        $new = clone $this;
        $new->DureeEnJoursSiJourUnique = $DureeEnJoursSiJourUnique;

        return $new;
    }

    /**
     * @return string
     */
    public function getCommentaires()
    {
        return $this->Commentaires;
    }

    /**
     * @param string $Commentaires
     * @return CPAISWSUtilisateurSalarieAbsence2
     */
    public function withCommentaires($Commentaires)
    {
        $new = clone $this;
        $new->Commentaires = $Commentaires;

        return $new;
    }

    /**
     * @return bool
     */
    public function getEstDansBulletin()
    {
        return $this->EstDansBulletin;
    }

    /**
     * @param bool $EstDansBulletin
     * @return CPAISWSUtilisateurSalarieAbsence2
     */
    public function withEstDansBulletin($EstDansBulletin)
    {
        $new = clone $this;
        $new->EstDansBulletin = $EstDansBulletin;

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
     * @return CPAISWSUtilisateurSalarieAbsence2
     */
    public function withID_PAISALARIE($ID_PAISALARIE)
    {
        $new = clone $this;
        $new->ID_PAISALARIE = $ID_PAISALARIE;

        return $new;
    }

    /**
     * @return string
     */
    public function getMatricule()
    {
        return $this->Matricule;
    }

    /**
     * @param string $Matricule
     * @return CPAISWSUtilisateurSalarieAbsence2
     */
    public function withMatricule($Matricule)
    {
        $new = clone $this;
        $new->Matricule = $Matricule;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomSalarie()
    {
        return $this->NomSalarie;
    }

    /**
     * @param string $NomSalarie
     * @return CPAISWSUtilisateurSalarieAbsence2
     */
    public function withNomSalarie($NomSalarie)
    {
        $new = clone $this;
        $new->NomSalarie = $NomSalarie;

        return $new;
    }
}

