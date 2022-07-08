<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSArgumentAJ
{
    /**
     * @var \DateTimeInterface
     */
    private $Periode;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSIdentificationEmploi
     */
    private $Emplois;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $FiltreSalarie;

    /**
     * @return \DateTimeInterface
     */
    public function getPeriode()
    {
        return $this->Periode;
    }

    /**
     * @param \DateTimeInterface $Periode
     * @return CPAISWSArgumentAJ
     */
    public function withPeriode($Periode)
    {
        $new = clone $this;
        $new->Periode = $Periode;

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
     * @return CPAISWSArgumentAJ
     */
    public function withEmplois($Emplois)
    {
        $new = clone $this;
        $new->Emplois = $Emplois;

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
     * @return CPAISWSArgumentAJ
     */
    public function withFiltreSalarie($FiltreSalarie)
    {
        $new = clone $this;
        $new->FiltreSalarie = $FiltreSalarie;

        return $new;
    }
}

