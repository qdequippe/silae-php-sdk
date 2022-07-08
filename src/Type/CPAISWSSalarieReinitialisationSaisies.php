<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSalarieReinitialisationSaisies
{
    /**
     * @var \DateTimeInterface
     */
    private $PeriodeReinitialisation;

    /**
     * @var bool
     */
    private $ReinitialiserHeures;

    /**
     * @var bool
     */
    private $ReinitialiserPrimes;

    /**
     * @var bool
     */
    private $ReinitialiserAbsences;

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeReinitialisation()
    {
        return $this->PeriodeReinitialisation;
    }

    /**
     * @param \DateTimeInterface $PeriodeReinitialisation
     * @return CPAISWSSalarieReinitialisationSaisies
     */
    public function withPeriodeReinitialisation($PeriodeReinitialisation)
    {
        $new = clone $this;
        $new->PeriodeReinitialisation = $PeriodeReinitialisation;

        return $new;
    }

    /**
     * @return bool
     */
    public function getReinitialiserHeures()
    {
        return $this->ReinitialiserHeures;
    }

    /**
     * @param bool $ReinitialiserHeures
     * @return CPAISWSSalarieReinitialisationSaisies
     */
    public function withReinitialiserHeures($ReinitialiserHeures)
    {
        $new = clone $this;
        $new->ReinitialiserHeures = $ReinitialiserHeures;

        return $new;
    }

    /**
     * @return bool
     */
    public function getReinitialiserPrimes()
    {
        return $this->ReinitialiserPrimes;
    }

    /**
     * @param bool $ReinitialiserPrimes
     * @return CPAISWSSalarieReinitialisationSaisies
     */
    public function withReinitialiserPrimes($ReinitialiserPrimes)
    {
        $new = clone $this;
        $new->ReinitialiserPrimes = $ReinitialiserPrimes;

        return $new;
    }

    /**
     * @return bool
     */
    public function getReinitialiserAbsences()
    {
        return $this->ReinitialiserAbsences;
    }

    /**
     * @param bool $ReinitialiserAbsences
     * @return CPAISWSSalarieReinitialisationSaisies
     */
    public function withReinitialiserAbsences($ReinitialiserAbsences)
    {
        $new = clone $this;
        $new->ReinitialiserAbsences = $ReinitialiserAbsences;

        return $new;
    }
}

