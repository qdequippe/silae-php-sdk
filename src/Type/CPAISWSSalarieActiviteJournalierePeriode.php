<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSalarieActiviteJournalierePeriode
{
    /**
     * @var \DateTimeInterface
     */
    private $PeriodeActivite;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieActiviteJournaliere
     */
    private $Calendrier;

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeActivite()
    {
        return $this->PeriodeActivite;
    }

    /**
     * @param \DateTimeInterface $PeriodeActivite
     * @return CPAISWSSalarieActiviteJournalierePeriode
     */
    public function withPeriodeActivite($PeriodeActivite)
    {
        $new = clone $this;
        $new->PeriodeActivite = $PeriodeActivite;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieActiviteJournaliere
     */
    public function getCalendrier()
    {
        return $this->Calendrier;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieActiviteJournaliere $Calendrier
     * @return CPAISWSSalarieActiviteJournalierePeriode
     */
    public function withCalendrier($Calendrier)
    {
        $new = clone $this;
        $new->Calendrier = $Calendrier;

        return $new;
    }
}

