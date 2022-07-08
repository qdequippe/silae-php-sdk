<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSArgumentSuperviseurSA
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
     * @var string
     */
    private $TypeGroupe;

    /**
     * @var bool
     */
    private $AfficherMesPropresInformations;

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeMin()
    {
        return $this->PeriodeMin;
    }

    /**
     * @param \DateTimeInterface $PeriodeMin
     * @return CPAISWSArgumentSuperviseurSA
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
     * @return CPAISWSArgumentSuperviseurSA
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
     * @return CPAISWSArgumentSuperviseurSA
     */
    public function withFiltreSalarie($FiltreSalarie)
    {
        $new = clone $this;
        $new->FiltreSalarie = $FiltreSalarie;

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
     * @return CPAISWSArgumentSuperviseurSA
     */
    public function withTypeGroupe($TypeGroupe)
    {
        $new = clone $this;
        $new->TypeGroupe = $TypeGroupe;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAfficherMesPropresInformations()
    {
        return $this->AfficherMesPropresInformations;
    }

    /**
     * @param bool $AfficherMesPropresInformations
     * @return CPAISWSArgumentSuperviseurSA
     */
    public function withAfficherMesPropresInformations($AfficherMesPropresInformations)
    {
        $new = clone $this;
        $new->AfficherMesPropresInformations = $AfficherMesPropresInformations;

        return $new;
    }
}

