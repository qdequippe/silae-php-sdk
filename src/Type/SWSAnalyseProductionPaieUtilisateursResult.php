<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSAnalyseProductionPaieUtilisateursResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStatistiquesUtilisateurs
     */
    private $StatistiquesUtilisateurs;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStatistiquesUtilisateurs
     */
    public function getStatistiquesUtilisateurs()
    {
        return $this->StatistiquesUtilisateurs;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStatistiquesUtilisateurs $StatistiquesUtilisateurs
     * @return SWSAnalyseProductionPaieUtilisateursResult
     */
    public function withStatistiquesUtilisateurs($StatistiquesUtilisateurs)
    {
        $new = clone $this;
        $new->StatistiquesUtilisateurs = $StatistiquesUtilisateurs;

        return $new;
    }
}

