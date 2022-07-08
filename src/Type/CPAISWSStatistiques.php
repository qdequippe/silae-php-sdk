<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSStatistiques
{
    /**
     * @var string
     */
    private $NumeroDossier;

    /**
     * @var string
     */
    private $CodeAgence;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStatistiquesProduction
     */
    private $StatistiquesProduction;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStatistiquesDADS
     */
    private $StatistiquesDADS;

    /**
     * @return string
     */
    public function getNumeroDossier()
    {
        return $this->NumeroDossier;
    }

    /**
     * @param string $NumeroDossier
     * @return CPAISWSStatistiques
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeAgence()
    {
        return $this->CodeAgence;
    }

    /**
     * @param string $CodeAgence
     * @return CPAISWSStatistiques
     */
    public function withCodeAgence($CodeAgence)
    {
        $new = clone $this;
        $new->CodeAgence = $CodeAgence;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStatistiquesProduction
     */
    public function getStatistiquesProduction()
    {
        return $this->StatistiquesProduction;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStatistiquesProduction $StatistiquesProduction
     * @return CPAISWSStatistiques
     */
    public function withStatistiquesProduction($StatistiquesProduction)
    {
        $new = clone $this;
        $new->StatistiquesProduction = $StatistiquesProduction;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStatistiquesDADS
     */
    public function getStatistiquesDADS()
    {
        return $this->StatistiquesDADS;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStatistiquesDADS $StatistiquesDADS
     * @return CPAISWSStatistiques
     */
    public function withStatistiquesDADS($StatistiquesDADS)
    {
        $new = clone $this;
        $new->StatistiquesDADS = $StatistiquesDADS;

        return $new;
    }
}

