<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSAnalyseProductionPaieEntreesSortiesResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStatistiquesEntreesSorties
     */
    private $StatistiquesEntreesSorties;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStatistiquesEntreesSorties
     */
    public function getStatistiquesEntreesSorties()
    {
        return $this->StatistiquesEntreesSorties;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStatistiquesEntreesSorties $StatistiquesEntreesSorties
     * @return SWSAnalyseProductionPaieEntreesSortiesResult
     */
    public function withStatistiquesEntreesSorties($StatistiquesEntreesSorties)
    {
        $new = clone $this;
        $new->StatistiquesEntreesSorties = $StatistiquesEntreesSorties;

        return $new;
    }
}

