<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSalariesConfirmerSaisies
{
    /**
     * @var \DateTimeInterface
     */
    private $PeriodeConfirmation;

    /**
     * @var bool
     */
    private $ConfirmerHeures;

    /**
     * @var bool
     */
    private $ConfirmerPrimes;

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeConfirmation()
    {
        return $this->PeriodeConfirmation;
    }

    /**
     * @param \DateTimeInterface $PeriodeConfirmation
     * @return CPAISWSSalariesConfirmerSaisies
     */
    public function withPeriodeConfirmation($PeriodeConfirmation)
    {
        $new = clone $this;
        $new->PeriodeConfirmation = $PeriodeConfirmation;

        return $new;
    }

    /**
     * @return bool
     */
    public function getConfirmerHeures()
    {
        return $this->ConfirmerHeures;
    }

    /**
     * @param bool $ConfirmerHeures
     * @return CPAISWSSalariesConfirmerSaisies
     */
    public function withConfirmerHeures($ConfirmerHeures)
    {
        $new = clone $this;
        $new->ConfirmerHeures = $ConfirmerHeures;

        return $new;
    }

    /**
     * @return bool
     */
    public function getConfirmerPrimes()
    {
        return $this->ConfirmerPrimes;
    }

    /**
     * @param bool $ConfirmerPrimes
     * @return CPAISWSSalariesConfirmerSaisies
     */
    public function withConfirmerPrimes($ConfirmerPrimes)
    {
        $new = clone $this;
        $new->ConfirmerPrimes = $ConfirmerPrimes;

        return $new;
    }
}

