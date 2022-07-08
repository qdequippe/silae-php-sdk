<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSalarieElementVariable
{
    /**
     * @var \DateTimeInterface
     */
    private $PeriodeElementVariable;

    /**
     * @var string
     */
    private $CodeElementVariable;

    /**
     * @var float
     */
    private $MontantElementVariable;

    /**
     * @var string
     */
    private $ValeurChaineElementVariable;

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeElementVariable()
    {
        return $this->PeriodeElementVariable;
    }

    /**
     * @param \DateTimeInterface $PeriodeElementVariable
     * @return CPAISWSSalarieElementVariable
     */
    public function withPeriodeElementVariable($PeriodeElementVariable)
    {
        $new = clone $this;
        $new->PeriodeElementVariable = $PeriodeElementVariable;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeElementVariable()
    {
        return $this->CodeElementVariable;
    }

    /**
     * @param string $CodeElementVariable
     * @return CPAISWSSalarieElementVariable
     */
    public function withCodeElementVariable($CodeElementVariable)
    {
        $new = clone $this;
        $new->CodeElementVariable = $CodeElementVariable;

        return $new;
    }

    /**
     * @return float
     */
    public function getMontantElementVariable()
    {
        return $this->MontantElementVariable;
    }

    /**
     * @param float $MontantElementVariable
     * @return CPAISWSSalarieElementVariable
     */
    public function withMontantElementVariable($MontantElementVariable)
    {
        $new = clone $this;
        $new->MontantElementVariable = $MontantElementVariable;

        return $new;
    }

    /**
     * @return string
     */
    public function getValeurChaineElementVariable()
    {
        return $this->ValeurChaineElementVariable;
    }

    /**
     * @param string $ValeurChaineElementVariable
     * @return CPAISWSSalarieElementVariable
     */
    public function withValeurChaineElementVariable($ValeurChaineElementVariable)
    {
        $new = clone $this;
        $new->ValeurChaineElementVariable = $ValeurChaineElementVariable;

        return $new;
    }
}

