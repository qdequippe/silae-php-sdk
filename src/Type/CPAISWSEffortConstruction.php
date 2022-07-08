<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSEffortConstruction
{
    /**
     * @var bool
     */
    private $Assujettissement;

    /**
     * @var \DateTimeInterface
     */
    private $AnneeN;

    /**
     * @var float
     */
    private $PourcentageAnneeN;

    /**
     * @var float
     */
    private $PourcentageAnneeNPlus1;

    /**
     * @var float
     */
    private $PourcentageAnneeNPlus2;

    /**
     * @var float
     */
    private $PourcentageAnneeNPlus3;

    /**
     * @var float
     */
    private $PourcentageAnneeNPlus4;

    /**
     * @var float
     */
    private $PourcentageAnneeNPlus5;

    /**
     * @return bool
     */
    public function getAssujettissement()
    {
        return $this->Assujettissement;
    }

    /**
     * @param bool $Assujettissement
     * @return CPAISWSEffortConstruction
     */
    public function withAssujettissement($Assujettissement)
    {
        $new = clone $this;
        $new->Assujettissement = $Assujettissement;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getAnneeN()
    {
        return $this->AnneeN;
    }

    /**
     * @param \DateTimeInterface $AnneeN
     * @return CPAISWSEffortConstruction
     */
    public function withAnneeN($AnneeN)
    {
        $new = clone $this;
        $new->AnneeN = $AnneeN;

        return $new;
    }

    /**
     * @return float
     */
    public function getPourcentageAnneeN()
    {
        return $this->PourcentageAnneeN;
    }

    /**
     * @param float $PourcentageAnneeN
     * @return CPAISWSEffortConstruction
     */
    public function withPourcentageAnneeN($PourcentageAnneeN)
    {
        $new = clone $this;
        $new->PourcentageAnneeN = $PourcentageAnneeN;

        return $new;
    }

    /**
     * @return float
     */
    public function getPourcentageAnneeNPlus1()
    {
        return $this->PourcentageAnneeNPlus1;
    }

    /**
     * @param float $PourcentageAnneeNPlus1
     * @return CPAISWSEffortConstruction
     */
    public function withPourcentageAnneeNPlus1($PourcentageAnneeNPlus1)
    {
        $new = clone $this;
        $new->PourcentageAnneeNPlus1 = $PourcentageAnneeNPlus1;

        return $new;
    }

    /**
     * @return float
     */
    public function getPourcentageAnneeNPlus2()
    {
        return $this->PourcentageAnneeNPlus2;
    }

    /**
     * @param float $PourcentageAnneeNPlus2
     * @return CPAISWSEffortConstruction
     */
    public function withPourcentageAnneeNPlus2($PourcentageAnneeNPlus2)
    {
        $new = clone $this;
        $new->PourcentageAnneeNPlus2 = $PourcentageAnneeNPlus2;

        return $new;
    }

    /**
     * @return float
     */
    public function getPourcentageAnneeNPlus3()
    {
        return $this->PourcentageAnneeNPlus3;
    }

    /**
     * @param float $PourcentageAnneeNPlus3
     * @return CPAISWSEffortConstruction
     */
    public function withPourcentageAnneeNPlus3($PourcentageAnneeNPlus3)
    {
        $new = clone $this;
        $new->PourcentageAnneeNPlus3 = $PourcentageAnneeNPlus3;

        return $new;
    }

    /**
     * @return float
     */
    public function getPourcentageAnneeNPlus4()
    {
        return $this->PourcentageAnneeNPlus4;
    }

    /**
     * @param float $PourcentageAnneeNPlus4
     * @return CPAISWSEffortConstruction
     */
    public function withPourcentageAnneeNPlus4($PourcentageAnneeNPlus4)
    {
        $new = clone $this;
        $new->PourcentageAnneeNPlus4 = $PourcentageAnneeNPlus4;

        return $new;
    }

    /**
     * @return float
     */
    public function getPourcentageAnneeNPlus5()
    {
        return $this->PourcentageAnneeNPlus5;
    }

    /**
     * @param float $PourcentageAnneeNPlus5
     * @return CPAISWSEffortConstruction
     */
    public function withPourcentageAnneeNPlus5($PourcentageAnneeNPlus5)
    {
        $new = clone $this;
        $new->PourcentageAnneeNPlus5 = $PourcentageAnneeNPlus5;

        return $new;
    }
}

