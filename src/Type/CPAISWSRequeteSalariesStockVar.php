<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSRequeteSalariesStockVar
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
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $CodesStockVar;

    /**
     * @return string
     */
    public function getMatriculeSalarie()
    {
        return $this->MatriculeSalarie;
    }

    /**
     * @param string $MatriculeSalarie
     * @return CPAISWSRequeteSalariesStockVar
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
     * @return CPAISWSRequeteSalariesStockVar
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
     * @return CPAISWSRequeteSalariesStockVar
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
    public function getCodesStockVar()
    {
        return $this->CodesStockVar;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $CodesStockVar
     * @return CPAISWSRequeteSalariesStockVar
     */
    public function withCodesStockVar($CodesStockVar)
    {
        $new = clone $this;
        $new->CodesStockVar = $CodesStockVar;

        return $new;
    }
}

