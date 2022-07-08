<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSJoursTravaillesTM
{
    /**
     * @var int
     */
    private $ID_PAISALARIE;

    /**
     * @var \DateTimeInterface
     */
    private $Periode;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    private $NbHT;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfDateTime
     */
    private $JF;

    /**
     * @return int
     */
    public function getID_PAISALARIE()
    {
        return $this->ID_PAISALARIE;
    }

    /**
     * @param int $ID_PAISALARIE
     * @return CPAISWSJoursTravaillesTM
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
    public function getPeriode()
    {
        return $this->Periode;
    }

    /**
     * @param \DateTimeInterface $Periode
     * @return CPAISWSJoursTravaillesTM
     */
    public function withPeriode($Periode)
    {
        $new = clone $this;
        $new->Periode = $Periode;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    public function getNbHT()
    {
        return $this->NbHT;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble $NbHT
     * @return CPAISWSJoursTravaillesTM
     */
    public function withNbHT($NbHT)
    {
        $new = clone $this;
        $new->NbHT = $NbHT;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfDateTime
     */
    public function getJF()
    {
        return $this->JF;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfDateTime $JF
     * @return CPAISWSJoursTravaillesTM
     */
    public function withJF($JF)
    {
        $new = clone $this;
        $new->JF = $JF;

        return $new;
    }
}

