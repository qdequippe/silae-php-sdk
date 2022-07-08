<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSArgumentEA
{
    /**
     * @var \DateTimeInterface
     */
    private $PeriodeDebut;

    /**
     * @var \DateTimeInterface
     */
    private $PeriodeFin;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $FiltreSalarie;

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeDebut()
    {
        return $this->PeriodeDebut;
    }

    /**
     * @param \DateTimeInterface $PeriodeDebut
     * @return CPAISWSArgumentEA
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
     * @return CPAISWSArgumentEA
     */
    public function withPeriodeFin($PeriodeFin)
    {
        $new = clone $this;
        $new->PeriodeFin = $PeriodeFin;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getFiltreSalarie()
    {
        return $this->FiltreSalarie;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $FiltreSalarie
     * @return CPAISWSArgumentEA
     */
    public function withFiltreSalarie($FiltreSalarie)
    {
        $new = clone $this;
        $new->FiltreSalarie = $FiltreSalarie;

        return $new;
    }
}

