<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSAbsenceSimpleTM
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
     * @return int
     */
    public function getID_PAISALARIE()
    {
        return $this->ID_PAISALARIE;
    }

    /**
     * @param int $ID_PAISALARIE
     * @return CPAISWSAbsenceSimpleTM
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
     * @return CPAISWSAbsenceSimpleTM
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
     * @return CPAISWSAbsenceSimpleTM
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
     * @return CPAISWSAbsenceSimpleTM
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
     * @return CPAISWSAbsenceSimpleTM
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
     * @return CPAISWSAbsenceSimpleTM
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
     * @return CPAISWSAbsenceSimpleTM
     */
    public function withEstDansBulletin($EstDansBulletin)
    {
        $new = clone $this;
        $new->EstDansBulletin = $EstDansBulletin;

        return $new;
    }
}

