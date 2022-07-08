<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSUtilisateurSalarieAbsenceSimple
{
    /**
     * @var int
     */
    private $ID_PAISALARIE;

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
     * @var float
     */
    private $DureeEnHeuresSiJourUnique;

    /**
     * @var float
     */
    private $DureeEnJoursSiJourUnique;

    /**
     * @var bool
     */
    private $EstDansBulletin;

    /**
     * @var int
     */
    private $Statut;

    /**
     * @return int
     */
    public function getID_PAISALARIE()
    {
        return $this->ID_PAISALARIE;
    }

    /**
     * @param int $ID_PAISALARIE
     * @return CPAISWSUtilisateurSalarieAbsenceSimple
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
    public function getID_PAIABSENCE()
    {
        return $this->ID_PAIABSENCE;
    }

    /**
     * @param int $ID_PAIABSENCE
     * @return CPAISWSUtilisateurSalarieAbsenceSimple
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
     * @return CPAISWSUtilisateurSalarieAbsenceSimple
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
     * @return CPAISWSUtilisateurSalarieAbsenceSimple
     */
    public function withABS_DtFin($ABS_DtFin)
    {
        $new = clone $this;
        $new->ABS_DtFin = $ABS_DtFin;

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
     * @return CPAISWSUtilisateurSalarieAbsenceSimple
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
     * @return CPAISWSUtilisateurSalarieAbsenceSimple
     */
    public function withDureeEnJoursSiJourUnique($DureeEnJoursSiJourUnique)
    {
        $new = clone $this;
        $new->DureeEnJoursSiJourUnique = $DureeEnJoursSiJourUnique;

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
     * @return CPAISWSUtilisateurSalarieAbsenceSimple
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
    public function getStatut()
    {
        return $this->Statut;
    }

    /**
     * @param int $Statut
     * @return CPAISWSUtilisateurSalarieAbsenceSimple
     */
    public function withStatut($Statut)
    {
        $new = clone $this;
        $new->Statut = $Statut;

        return $new;
    }
}

