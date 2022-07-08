<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSArgumentEtatTM
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $FiltreSalarie;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSIdentificationEmploi
     */
    private $Emplois;

    /**
     * @var \DateTimeInterface
     */
    private $Periode;

    /**
     * @var bool
     */
    private $FiltrerLesValidations;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getFiltreSalarie()
    {
        return $this->FiltreSalarie;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $FiltreSalarie
     * @return CPAISWSArgumentEtatTM
     */
    public function withFiltreSalarie($FiltreSalarie)
    {
        $new = clone $this;
        $new->FiltreSalarie = $FiltreSalarie;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSIdentificationEmploi
     */
    public function getEmplois()
    {
        return $this->Emplois;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSIdentificationEmploi $Emplois
     * @return CPAISWSArgumentEtatTM
     */
    public function withEmplois($Emplois)
    {
        $new = clone $this;
        $new->Emplois = $Emplois;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPeriode()
    {
        return $this->Periode;
    }

    /**
     * @param \DateTimeInterface $Periode
     * @return CPAISWSArgumentEtatTM
     */
    public function withPeriode($Periode)
    {
        $new = clone $this;
        $new->Periode = $Periode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getFiltrerLesValidations()
    {
        return $this->FiltrerLesValidations;
    }

    /**
     * @param bool $FiltrerLesValidations
     * @return CPAISWSArgumentEtatTM
     */
    public function withFiltrerLesValidations($FiltrerLesValidations)
    {
        $new = clone $this;
        $new->FiltrerLesValidations = $FiltrerLesValidations;

        return $new;
    }
}

