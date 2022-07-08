<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSAcompteTM
{
    /**
     * @var int
     */
    private $ID_PAISALARIE;

    /**
     * @var \DateTimeInterface
     */
    private $DateAcompte;

    /**
     * @var bool
     */
    private $IgnoreJour;

    /**
     * @var float
     */
    private $MontantAcompte;

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
     * @return CPAISWSAcompteTM
     */
    public function withID_PAISALARIE($ID_PAISALARIE)
    {
        $new = clone $this;
        $new->ID_PAISALARIE = $ID_PAISALARIE;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateAcompte()
    {
        return $this->DateAcompte;
    }

    /**
     * @param \DateTimeInterface $DateAcompte
     * @return CPAISWSAcompteTM
     */
    public function withDateAcompte($DateAcompte)
    {
        $new = clone $this;
        $new->DateAcompte = $DateAcompte;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIgnoreJour()
    {
        return $this->IgnoreJour;
    }

    /**
     * @param bool $IgnoreJour
     * @return CPAISWSAcompteTM
     */
    public function withIgnoreJour($IgnoreJour)
    {
        $new = clone $this;
        $new->IgnoreJour = $IgnoreJour;

        return $new;
    }

    /**
     * @return float
     */
    public function getMontantAcompte()
    {
        return $this->MontantAcompte;
    }

    /**
     * @param float $MontantAcompte
     * @return CPAISWSAcompteTM
     */
    public function withMontantAcompte($MontantAcompte)
    {
        $new = clone $this;
        $new->MontantAcompte = $MontantAcompte;

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
     * @return CPAISWSAcompteTM
     */
    public function withEstDansBulletin($EstDansBulletin)
    {
        $new = clone $this;
        $new->EstDansBulletin = $EstDansBulletin;

        return $new;
    }
}

