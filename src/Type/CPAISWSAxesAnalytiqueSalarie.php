<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSAxesAnalytiqueSalarie
{
    /**
     * @var string
     */
    private $MatriculeSalarie;

    /**
     * @var string
     */
    private $NomAffiche;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSDonneesAxeAnalytiqueSalarie
     */
    private $AffectationAnalytique;

    /**
     * @return string
     */
    public function getMatriculeSalarie()
    {
        return $this->MatriculeSalarie;
    }

    /**
     * @param string $MatriculeSalarie
     * @return CPAISWSAxesAnalytiqueSalarie
     */
    public function withMatriculeSalarie($MatriculeSalarie)
    {
        $new = clone $this;
        $new->MatriculeSalarie = $MatriculeSalarie;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomAffiche()
    {
        return $this->NomAffiche;
    }

    /**
     * @param string $NomAffiche
     * @return CPAISWSAxesAnalytiqueSalarie
     */
    public function withNomAffiche($NomAffiche)
    {
        $new = clone $this;
        $new->NomAffiche = $NomAffiche;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSDonneesAxeAnalytiqueSalarie
     */
    public function getAffectationAnalytique()
    {
        return $this->AffectationAnalytique;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSDonneesAxeAnalytiqueSalarie $AffectationAnalytique
     * @return CPAISWSAxesAnalytiqueSalarie
     */
    public function withAffectationAnalytique($AffectationAnalytique)
    {
        $new = clone $this;
        $new->AffectationAnalytique = $AffectationAnalytique;

        return $new;
    }
}

