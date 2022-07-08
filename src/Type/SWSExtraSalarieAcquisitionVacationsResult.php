<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSExtraSalarieAcquisitionVacationsResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSExtraSalarieVacations
     */
    private $ExtraSalarieVacations;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSExtraSalarieVacations
     */
    public function getExtraSalarieVacations()
    {
        return $this->ExtraSalarieVacations;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSExtraSalarieVacations $ExtraSalarieVacations
     * @return SWSExtraSalarieAcquisitionVacationsResult
     */
    public function withExtraSalarieVacations($ExtraSalarieVacations)
    {
        $new = clone $this;
        $new->ExtraSalarieVacations = $ExtraSalarieVacations;

        return $new;
    }
}

