<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurContactAcquisitionHMensResult
{
    /**
     * @var \DateTimeInterface
     */
    private $Periode;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSInfoColonneHeureTM
     */
    private $InfoColonnes;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieEmploiHeuresTM
     */
    private $Salaries;

    /**
     * @var bool
     */
    private $PeriodeConfirmeeGlobalement;

    /**
     * @return \DateTimeInterface
     */
    public function getPeriode()
    {
        return $this->Periode;
    }

    /**
     * @param \DateTimeInterface $Periode
     * @return SWSUtilisateurContactAcquisitionHMensResult
     */
    public function withPeriode($Periode)
    {
        $new = clone $this;
        $new->Periode = $Periode;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSInfoColonneHeureTM
     */
    public function getInfoColonnes()
    {
        return $this->InfoColonnes;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSInfoColonneHeureTM $InfoColonnes
     * @return SWSUtilisateurContactAcquisitionHMensResult
     */
    public function withInfoColonnes($InfoColonnes)
    {
        $new = clone $this;
        $new->InfoColonnes = $InfoColonnes;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieEmploiHeuresTM
     */
    public function getSalaries()
    {
        return $this->Salaries;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieEmploiHeuresTM $Salaries
     * @return SWSUtilisateurContactAcquisitionHMensResult
     */
    public function withSalaries($Salaries)
    {
        $new = clone $this;
        $new->Salaries = $Salaries;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPeriodeConfirmeeGlobalement()
    {
        return $this->PeriodeConfirmeeGlobalement;
    }

    /**
     * @param bool $PeriodeConfirmeeGlobalement
     * @return SWSUtilisateurContactAcquisitionHMensResult
     */
    public function withPeriodeConfirmeeGlobalement($PeriodeConfirmeeGlobalement)
    {
        $new = clone $this;
        $new->PeriodeConfirmeeGlobalement = $PeriodeConfirmeeGlobalement;

        return $new;
    }
}

