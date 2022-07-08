<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSUtilisateurSalarieDemandeConges
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
     * @return int
     */
    public function getID_PAIABSENCE()
    {
        return $this->ID_PAIABSENCE;
    }

    /**
     * @param int $ID_PAIABSENCE
     * @return CPAISWSUtilisateurSalarieDemandeConges
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
     * @return CPAISWSUtilisateurSalarieDemandeConges
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
     * @return CPAISWSUtilisateurSalarieDemandeConges
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
     * @return CPAISWSUtilisateurSalarieDemandeConges
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
     * @return CPAISWSUtilisateurSalarieDemandeConges
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
     * @return CPAISWSUtilisateurSalarieDemandeConges
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
     * @return CPAISWSUtilisateurSalarieDemandeConges
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
     * @return CPAISWSUtilisateurSalarieDemandeConges
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
     * @return CPAISWSUtilisateurSalarieDemandeConges
     */
    public function withABS_ValidationIdentifiantUtilisateur($ABS_ValidationIdentifiantUtilisateur)
    {
        $new = clone $this;
        $new->ABS_ValidationIdentifiantUtilisateur = $ABS_ValidationIdentifiantUtilisateur;

        return $new;
    }
}

