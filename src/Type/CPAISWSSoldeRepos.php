<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSoldeRepos
{
    /**
     * @var string
     */
    private $NumeroDossier;

    /**
     * @var \DateTimeInterface
     */
    private $Periode;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSoldeReposSalarie
     */
    private $SoldeReposSalaries;

    /**
     * @return string
     */
    public function getNumeroDossier()
    {
        return $this->NumeroDossier;
    }

    /**
     * @param string $NumeroDossier
     * @return CPAISWSSoldeRepos
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

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
     * @return CPAISWSSoldeRepos
     */
    public function withPeriode($Periode)
    {
        $new = clone $this;
        $new->Periode = $Periode;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSoldeReposSalarie
     */
    public function getSoldeReposSalaries()
    {
        return $this->SoldeReposSalaries;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSoldeReposSalarie $SoldeReposSalaries
     * @return CPAISWSSoldeRepos
     */
    public function withSoldeReposSalaries($SoldeReposSalaries)
    {
        $new = clone $this;
        $new->SoldeReposSalaries = $SoldeReposSalaries;

        return $new;
    }
}

