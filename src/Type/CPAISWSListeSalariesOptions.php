<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSListeSalariesOptions
{
    /**
     * @var \DateTimeInterface
     */
    private $OptionActifSurPeriode;

    /**
     * @var \DateTimeInterface
     */
    private $OptionActifALaDate;

    /**
     * @return \DateTimeInterface
     */
    public function getOptionActifSurPeriode()
    {
        return $this->OptionActifSurPeriode;
    }

    /**
     * @param \DateTimeInterface $OptionActifSurPeriode
     * @return CPAISWSListeSalariesOptions
     */
    public function withOptionActifSurPeriode($OptionActifSurPeriode)
    {
        $new = clone $this;
        $new->OptionActifSurPeriode = $OptionActifSurPeriode;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getOptionActifALaDate()
    {
        return $this->OptionActifALaDate;
    }

    /**
     * @param \DateTimeInterface $OptionActifALaDate
     * @return CPAISWSListeSalariesOptions
     */
    public function withOptionActifALaDate($OptionActifALaDate)
    {
        $new = clone $this;
        $new->OptionActifALaDate = $OptionActifALaDate;

        return $new;
    }
}

