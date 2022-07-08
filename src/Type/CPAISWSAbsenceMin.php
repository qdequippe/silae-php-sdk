<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSAbsenceMin
{
    /**
     * @var \DateTimeInterface
     */
    private $DtDeb;

    /**
     * @var \DateTimeInterface
     */
    private $DtFin;

    /**
     * @var string
     */
    private $Libelle;

    /**
     * @var string
     */
    private $Duree;

    /**
     * @return \DateTimeInterface
     */
    public function getDtDeb()
    {
        return $this->DtDeb;
    }

    /**
     * @param \DateTimeInterface $DtDeb
     * @return CPAISWSAbsenceMin
     */
    public function withDtDeb($DtDeb)
    {
        $new = clone $this;
        $new->DtDeb = $DtDeb;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDtFin()
    {
        return $this->DtFin;
    }

    /**
     * @param \DateTimeInterface $DtFin
     * @return CPAISWSAbsenceMin
     */
    public function withDtFin($DtFin)
    {
        $new = clone $this;
        $new->DtFin = $DtFin;

        return $new;
    }

    /**
     * @return string
     */
    public function getLibelle()
    {
        return $this->Libelle;
    }

    /**
     * @param string $Libelle
     * @return CPAISWSAbsenceMin
     */
    public function withLibelle($Libelle)
    {
        $new = clone $this;
        $new->Libelle = $Libelle;

        return $new;
    }

    /**
     * @return string
     */
    public function getDuree()
    {
        return $this->Duree;
    }

    /**
     * @param string $Duree
     * @return CPAISWSAbsenceMin
     */
    public function withDuree($Duree)
    {
        $new = clone $this;
        $new->Duree = $Duree;

        return $new;
    }
}

