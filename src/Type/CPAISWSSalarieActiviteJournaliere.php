<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSalarieActiviteJournaliere
{
    /**
     * @var \DateTimeInterface
     */
    private $Jour;

    /**
     * @var float
     */
    private $NombreHeures;

    /**
     * @var float
     */
    private $HeureDebut1;

    /**
     * @var float
     */
    private $HeureFin1;

    /**
     * @var float
     */
    private $HeureDebut2;

    /**
     * @var float
     */
    private $HeureFin2;

    /**
     * @var float
     */
    private $HeureDebut3;

    /**
     * @var float
     */
    private $HeureFin3;

    /**
     * @var bool
     */
    private $ReinitialiserJournee;

    /**
     * @return \DateTimeInterface
     */
    public function getJour()
    {
        return $this->Jour;
    }

    /**
     * @param \DateTimeInterface $Jour
     * @return CPAISWSSalarieActiviteJournaliere
     */
    public function withJour($Jour)
    {
        $new = clone $this;
        $new->Jour = $Jour;

        return $new;
    }

    /**
     * @return float
     */
    public function getNombreHeures()
    {
        return $this->NombreHeures;
    }

    /**
     * @param float $NombreHeures
     * @return CPAISWSSalarieActiviteJournaliere
     */
    public function withNombreHeures($NombreHeures)
    {
        $new = clone $this;
        $new->NombreHeures = $NombreHeures;

        return $new;
    }

    /**
     * @return float
     */
    public function getHeureDebut1()
    {
        return $this->HeureDebut1;
    }

    /**
     * @param float $HeureDebut1
     * @return CPAISWSSalarieActiviteJournaliere
     */
    public function withHeureDebut1($HeureDebut1)
    {
        $new = clone $this;
        $new->HeureDebut1 = $HeureDebut1;

        return $new;
    }

    /**
     * @return float
     */
    public function getHeureFin1()
    {
        return $this->HeureFin1;
    }

    /**
     * @param float $HeureFin1
     * @return CPAISWSSalarieActiviteJournaliere
     */
    public function withHeureFin1($HeureFin1)
    {
        $new = clone $this;
        $new->HeureFin1 = $HeureFin1;

        return $new;
    }

    /**
     * @return float
     */
    public function getHeureDebut2()
    {
        return $this->HeureDebut2;
    }

    /**
     * @param float $HeureDebut2
     * @return CPAISWSSalarieActiviteJournaliere
     */
    public function withHeureDebut2($HeureDebut2)
    {
        $new = clone $this;
        $new->HeureDebut2 = $HeureDebut2;

        return $new;
    }

    /**
     * @return float
     */
    public function getHeureFin2()
    {
        return $this->HeureFin2;
    }

    /**
     * @param float $HeureFin2
     * @return CPAISWSSalarieActiviteJournaliere
     */
    public function withHeureFin2($HeureFin2)
    {
        $new = clone $this;
        $new->HeureFin2 = $HeureFin2;

        return $new;
    }

    /**
     * @return float
     */
    public function getHeureDebut3()
    {
        return $this->HeureDebut3;
    }

    /**
     * @param float $HeureDebut3
     * @return CPAISWSSalarieActiviteJournaliere
     */
    public function withHeureDebut3($HeureDebut3)
    {
        $new = clone $this;
        $new->HeureDebut3 = $HeureDebut3;

        return $new;
    }

    /**
     * @return float
     */
    public function getHeureFin3()
    {
        return $this->HeureFin3;
    }

    /**
     * @param float $HeureFin3
     * @return CPAISWSSalarieActiviteJournaliere
     */
    public function withHeureFin3($HeureFin3)
    {
        $new = clone $this;
        $new->HeureFin3 = $HeureFin3;

        return $new;
    }

    /**
     * @return bool
     */
    public function getReinitialiserJournee()
    {
        return $this->ReinitialiserJournee;
    }

    /**
     * @param bool $ReinitialiserJournee
     * @return CPAISWSSalarieActiviteJournaliere
     */
    public function withReinitialiserJournee($ReinitialiserJournee)
    {
        $new = clone $this;
        $new->ReinitialiserJournee = $ReinitialiserJournee;

        return $new;
    }
}

