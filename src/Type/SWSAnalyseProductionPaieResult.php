<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSAnalyseProductionPaieResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStatistiques
     */
    private $Statistiques;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStatistiques
     */
    public function getStatistiques()
    {
        return $this->Statistiques;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStatistiques $Statistiques
     * @return SWSAnalyseProductionPaieResult
     */
    public function withStatistiques($Statistiques)
    {
        $new = clone $this;
        $new->Statistiques = $Statistiques;

        return $new;
    }
}

