<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSSpectacleSalarieAcquisitionAffectationsResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSpectacleSalarieAffectations
     */
    private $SpectacleSalarieAffectations;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSpectacleSalarieAffectations
     */
    public function getSpectacleSalarieAffectations()
    {
        return $this->SpectacleSalarieAffectations;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSpectacleSalarieAffectations $SpectacleSalarieAffectations
     * @return SWSSpectacleSalarieAcquisitionAffectationsResult
     */
    public function withSpectacleSalarieAffectations($SpectacleSalarieAffectations)
    {
        $new = clone $this;
        $new->SpectacleSalarieAffectations = $SpectacleSalarieAffectations;

        return $new;
    }
}

