<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSRequeteExtraSalarieVacations
{
    /**
     * @var string
     */
    private $MatriculeSalarie;

    /**
     * @var int
     */
    private $IdentifiantEmploi;

    /**
     * @var bool
     */
    private $VerifierDisponibiliteEmploi;

    /**
     * @var \DateTimeInterface
     */
    private $Periode;

    /**
     * @var string
     */
    private $NomInterneEtablissement;

    /**
     * @return string
     */
    public function getMatriculeSalarie()
    {
        return $this->MatriculeSalarie;
    }

    /**
     * @param string $MatriculeSalarie
     * @return CPAISWSRequeteExtraSalarieVacations
     */
    public function withMatriculeSalarie($MatriculeSalarie)
    {
        $new = clone $this;
        $new->MatriculeSalarie = $MatriculeSalarie;

        return $new;
    }

    /**
     * @return int
     */
    public function getIdentifiantEmploi()
    {
        return $this->IdentifiantEmploi;
    }

    /**
     * @param int $IdentifiantEmploi
     * @return CPAISWSRequeteExtraSalarieVacations
     */
    public function withIdentifiantEmploi($IdentifiantEmploi)
    {
        $new = clone $this;
        $new->IdentifiantEmploi = $IdentifiantEmploi;

        return $new;
    }

    /**
     * @return bool
     */
    public function getVerifierDisponibiliteEmploi()
    {
        return $this->VerifierDisponibiliteEmploi;
    }

    /**
     * @param bool $VerifierDisponibiliteEmploi
     * @return CPAISWSRequeteExtraSalarieVacations
     */
    public function withVerifierDisponibiliteEmploi($VerifierDisponibiliteEmploi)
    {
        $new = clone $this;
        $new->VerifierDisponibiliteEmploi = $VerifierDisponibiliteEmploi;

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
     * @return CPAISWSRequeteExtraSalarieVacations
     */
    public function withPeriode($Periode)
    {
        $new = clone $this;
        $new->Periode = $Periode;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomInterneEtablissement()
    {
        return $this->NomInterneEtablissement;
    }

    /**
     * @param string $NomInterneEtablissement
     * @return CPAISWSRequeteExtraSalarieVacations
     */
    public function withNomInterneEtablissement($NomInterneEtablissement)
    {
        $new = clone $this;
        $new->NomInterneEtablissement = $NomInterneEtablissement;

        return $new;
    }
}

