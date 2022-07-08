<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurContactAcquisitionSalariesAJResult
{
    /**
     * @var \DateTimeInterface
     */
    private $Periode;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieEtEmploiTM
     */
    private $SalariesEtEmplois;

    /**
     * @return \DateTimeInterface
     */
    public function getPeriode()
    {
        return $this->Periode;
    }

    /**
     * @param \DateTimeInterface $Periode
     * @return SWSUtilisateurContactAcquisitionSalariesAJResult
     */
    public function withPeriode($Periode)
    {
        $new = clone $this;
        $new->Periode = $Periode;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieEtEmploiTM
     */
    public function getSalariesEtEmplois()
    {
        return $this->SalariesEtEmplois;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieEtEmploiTM $SalariesEtEmplois
     * @return SWSUtilisateurContactAcquisitionSalariesAJResult
     */
    public function withSalariesEtEmplois($SalariesEtEmplois)
    {
        $new = clone $this;
        $new->SalariesEtEmplois = $SalariesEtEmplois;

        return $new;
    }
}

