<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSStatistiquesUtilisateurs
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
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStatistiquesProductionUtilisateur
     */
    private $StatistiquesProductionUtilisateurs;

    /**
     * @return string
     */
    public function getNumeroDossier()
    {
        return $this->NumeroDossier;
    }

    /**
     * @param string $NumeroDossier
     * @return CPAISWSStatistiquesUtilisateurs
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
     * @return CPAISWSStatistiquesUtilisateurs
     */
    public function withCodeAgence($CodeAgence)
    {
        $new = clone $this;
        $new->CodeAgence = $CodeAgence;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStatistiquesProductionUtilisateur
     */
    public function getStatistiquesProductionUtilisateurs()
    {
        return $this->StatistiquesProductionUtilisateurs;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStatistiquesProductionUtilisateur $StatistiquesProductionUtilisateurs
     * @return CPAISWSStatistiquesUtilisateurs
     */
    public function withStatistiquesProductionUtilisateurs($StatistiquesProductionUtilisateurs)
    {
        $new = clone $this;
        $new->StatistiquesProductionUtilisateurs = $StatistiquesProductionUtilisateurs;

        return $new;
    }
}

