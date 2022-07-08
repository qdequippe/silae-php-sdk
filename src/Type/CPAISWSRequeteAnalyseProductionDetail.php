<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSRequeteAnalyseProductionDetail
{
    /**
     * @var string
     */
    private $NumeroDossier;

    /**
     * @var \DateTimeInterface
     */
    private $PeriodeDebut;

    /**
     * @var \DateTimeInterface
     */
    private $PeriodeFin;

    /**
     * @var string
     */
    private $NomAnalyse;

    /**
     * @return string
     */
    public function getNumeroDossier()
    {
        return $this->NumeroDossier;
    }

    /**
     * @param string $NumeroDossier
     * @return CPAISWSRequeteAnalyseProductionDetail
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
    public function getPeriodeDebut()
    {
        return $this->PeriodeDebut;
    }

    /**
     * @param \DateTimeInterface $PeriodeDebut
     * @return CPAISWSRequeteAnalyseProductionDetail
     */
    public function withPeriodeDebut($PeriodeDebut)
    {
        $new = clone $this;
        $new->PeriodeDebut = $PeriodeDebut;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeFin()
    {
        return $this->PeriodeFin;
    }

    /**
     * @param \DateTimeInterface $PeriodeFin
     * @return CPAISWSRequeteAnalyseProductionDetail
     */
    public function withPeriodeFin($PeriodeFin)
    {
        $new = clone $this;
        $new->PeriodeFin = $PeriodeFin;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomAnalyse()
    {
        return $this->NomAnalyse;
    }

    /**
     * @param string $NomAnalyse
     * @return CPAISWSRequeteAnalyseProductionDetail
     */
    public function withNomAnalyse($NomAnalyse)
    {
        $new = clone $this;
        $new->NomAnalyse = $NomAnalyse;

        return $new;
    }
}

