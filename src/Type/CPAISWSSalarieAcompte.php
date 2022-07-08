<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSalarieAcompte
{
    /**
     * @var \DateTimeInterface
     */
    private $DateAcompte;

    /**
     * @var bool
     */
    private $JourNonSignificatif;

    /**
     * @var float
     */
    private $MontantAcompte;

    /**
     * @return \DateTimeInterface
     */
    public function getDateAcompte()
    {
        return $this->DateAcompte;
    }

    /**
     * @param \DateTimeInterface $DateAcompte
     * @return CPAISWSSalarieAcompte
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
    public function getJourNonSignificatif()
    {
        return $this->JourNonSignificatif;
    }

    /**
     * @param bool $JourNonSignificatif
     * @return CPAISWSSalarieAcompte
     */
    public function withJourNonSignificatif($JourNonSignificatif)
    {
        $new = clone $this;
        $new->JourNonSignificatif = $JourNonSignificatif;

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
     * @return CPAISWSSalarieAcompte
     */
    public function withMontantAcompte($MontantAcompte)
    {
        $new = clone $this;
        $new->MontantAcompte = $MontantAcompte;

        return $new;
    }
}

