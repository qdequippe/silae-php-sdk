<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSBureautiquePaieNombreDocumentsCreesResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStatistiquesBureautique
     */
    private $StatistiquesBureautique;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStatistiquesBureautique
     */
    public function getStatistiquesBureautique()
    {
        return $this->StatistiquesBureautique;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStatistiquesBureautique $StatistiquesBureautique
     * @return SWSBureautiquePaieNombreDocumentsCreesResult
     */
    public function withStatistiquesBureautique($StatistiquesBureautique)
    {
        $new = clone $this;
        $new->StatistiquesBureautique = $StatistiquesBureautique;

        return $new;
    }
}

