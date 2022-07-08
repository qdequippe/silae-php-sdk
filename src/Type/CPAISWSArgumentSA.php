<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSArgumentSA
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
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $FiltreSalarie;

    /**
     * @var bool
     */
    private $DonneesGroupe;

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeMin()
    {
        return $this->PeriodeMin;
    }

    /**
     * @param \DateTimeInterface $PeriodeMin
     * @return CPAISWSArgumentSA
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
     * @return CPAISWSArgumentSA
     */
    public function withPeriodeMax($PeriodeMax)
    {
        $new = clone $this;
        $new->PeriodeMax = $PeriodeMax;

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
     * @return CPAISWSArgumentSA
     */
    public function withFiltreSalarie($FiltreSalarie)
    {
        $new = clone $this;
        $new->FiltreSalarie = $FiltreSalarie;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDonneesGroupe()
    {
        return $this->DonneesGroupe;
    }

    /**
     * @param bool $DonneesGroupe
     * @return CPAISWSArgumentSA
     */
    public function withDonneesGroupe($DonneesGroupe)
    {
        $new = clone $this;
        $new->DonneesGroupe = $DonneesGroupe;

        return $new;
    }
}

