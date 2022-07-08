<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSActivationDSN
{
    /**
     * @var string
     */
    private $NumeroDossier;

    /**
     * @var \DateTimeInterface
     */
    private $PeriodeDemarrageDsnMensuelle;

    /**
     * @var \DateTimeInterface
     */
    private $PeriodeDemarrageDsnArretDeTravail;

    /**
     * @var \DateTimeInterface
     */
    private $PeriodeDemarrageDsnFinDeContrat;

    /**
     * @return string
     */
    public function getNumeroDossier()
    {
        return $this->NumeroDossier;
    }

    /**
     * @param string $NumeroDossier
     * @return CPAISWSActivationDSN
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeDemarrageDsnMensuelle()
    {
        return $this->PeriodeDemarrageDsnMensuelle;
    }

    /**
     * @param \DateTimeInterface $PeriodeDemarrageDsnMensuelle
     * @return CPAISWSActivationDSN
     */
    public function withPeriodeDemarrageDsnMensuelle($PeriodeDemarrageDsnMensuelle)
    {
        $new = clone $this;
        $new->PeriodeDemarrageDsnMensuelle = $PeriodeDemarrageDsnMensuelle;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeDemarrageDsnArretDeTravail()
    {
        return $this->PeriodeDemarrageDsnArretDeTravail;
    }

    /**
     * @param \DateTimeInterface $PeriodeDemarrageDsnArretDeTravail
     * @return CPAISWSActivationDSN
     */
    public function withPeriodeDemarrageDsnArretDeTravail($PeriodeDemarrageDsnArretDeTravail)
    {
        $new = clone $this;
        $new->PeriodeDemarrageDsnArretDeTravail = $PeriodeDemarrageDsnArretDeTravail;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeDemarrageDsnFinDeContrat()
    {
        return $this->PeriodeDemarrageDsnFinDeContrat;
    }

    /**
     * @param \DateTimeInterface $PeriodeDemarrageDsnFinDeContrat
     * @return CPAISWSActivationDSN
     */
    public function withPeriodeDemarrageDsnFinDeContrat($PeriodeDemarrageDsnFinDeContrat)
    {
        $new = clone $this;
        $new->PeriodeDemarrageDsnFinDeContrat = $PeriodeDemarrageDsnFinDeContrat;

        return $new;
    }
}

