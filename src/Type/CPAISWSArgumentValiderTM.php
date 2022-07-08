<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSArgumentValiderTM
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSIdentificationEmploi
     */
    private $Emplois;

    /**
     * @var \DateTimeInterface
     */
    private $Periode;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSIdentificationEmploi
     */
    public function getEmplois()
    {
        return $this->Emplois;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSIdentificationEmploi $Emplois
     * @return CPAISWSArgumentValiderTM
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
     * @return CPAISWSArgumentValiderTM
     */
    public function withPeriode($Periode)
    {
        $new = clone $this;
        $new->Periode = $Periode;

        return $new;
    }
}

