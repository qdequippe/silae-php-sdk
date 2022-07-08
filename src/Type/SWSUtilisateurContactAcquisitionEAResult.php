<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurContactAcquisitionEAResult
{
    /**
     * @var \DateTimeInterface
     */
    private $PeriodeDeMontage;

    /**
     * @var \DateTimeInterface
     */
    private $PeriodeEnCours;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieEA
     */
    private $Salaries;

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeDeMontage()
    {
        return $this->PeriodeDeMontage;
    }

    /**
     * @param \DateTimeInterface $PeriodeDeMontage
     * @return SWSUtilisateurContactAcquisitionEAResult
     */
    public function withPeriodeDeMontage($PeriodeDeMontage)
    {
        $new = clone $this;
        $new->PeriodeDeMontage = $PeriodeDeMontage;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeEnCours()
    {
        return $this->PeriodeEnCours;
    }

    /**
     * @param \DateTimeInterface $PeriodeEnCours
     * @return SWSUtilisateurContactAcquisitionEAResult
     */
    public function withPeriodeEnCours($PeriodeEnCours)
    {
        $new = clone $this;
        $new->PeriodeEnCours = $PeriodeEnCours;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieEA
     */
    public function getSalaries()
    {
        return $this->Salaries;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieEA $Salaries
     * @return SWSUtilisateurContactAcquisitionEAResult
     */
    public function withSalaries($Salaries)
    {
        $new = clone $this;
        $new->Salaries = $Salaries;

        return $new;
    }
}

