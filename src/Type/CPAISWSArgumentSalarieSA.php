<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSArgumentSalarieSA
{
    /**
     * @var \DateTimeInterface
     */
    private $PeriodeMin;

    /**
     * @var \DateTimeInterface
     */
    private $PeriodeMax;

    /**
     * @var string
     */
    private $TypeGroupe;

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeMin()
    {
        return $this->PeriodeMin;
    }

    /**
     * @param \DateTimeInterface $PeriodeMin
     * @return CPAISWSArgumentSalarieSA
     */
    public function withPeriodeMin($PeriodeMin)
    {
        $new = clone $this;
        $new->PeriodeMin = $PeriodeMin;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeMax()
    {
        return $this->PeriodeMax;
    }

    /**
     * @param \DateTimeInterface $PeriodeMax
     * @return CPAISWSArgumentSalarieSA
     */
    public function withPeriodeMax($PeriodeMax)
    {
        $new = clone $this;
        $new->PeriodeMax = $PeriodeMax;

        return $new;
    }

    /**
     * @return string
     */
    public function getTypeGroupe()
    {
        return $this->TypeGroupe;
    }

    /**
     * @param string $TypeGroupe
     * @return CPAISWSArgumentSalarieSA
     */
    public function withTypeGroupe($TypeGroupe)
    {
        $new = clone $this;
        $new->TypeGroupe = $TypeGroupe;

        return $new;
    }
}

