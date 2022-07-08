<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSRequeteSalarieAbsences
{
    /**
     * @var string
     */
    private $MatriculeSalarie;

    /**
     * @var \DateTimeInterface
     */
    private $PeriodeDebut;

    /**
     * @var \DateTimeInterface
     */
    private $PeriodeFin;

    /**
     * @var int
     */
    private $OptionFiltrage;

    /**
     * @return string
     */
    public function getMatriculeSalarie()
    {
        return $this->MatriculeSalarie;
    }

    /**
     * @param string $MatriculeSalarie
     * @return CPAISWSRequeteSalarieAbsences
     */
    public function withMatriculeSalarie($MatriculeSalarie)
    {
        $new = clone $this;
        $new->MatriculeSalarie = $MatriculeSalarie;

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
     * @return CPAISWSRequeteSalarieAbsences
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
     * @return CPAISWSRequeteSalarieAbsences
     */
    public function withPeriodeFin($PeriodeFin)
    {
        $new = clone $this;
        $new->PeriodeFin = $PeriodeFin;

        return $new;
    }

    /**
     * @return int
     */
    public function getOptionFiltrage()
    {
        return $this->OptionFiltrage;
    }

    /**
     * @param int $OptionFiltrage
     * @return CPAISWSRequeteSalarieAbsences
     */
    public function withOptionFiltrage($OptionFiltrage)
    {
        $new = clone $this;
        $new->OptionFiltrage = $OptionFiltrage;

        return $new;
    }
}

