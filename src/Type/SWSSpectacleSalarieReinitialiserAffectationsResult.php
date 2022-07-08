<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSSpectacleSalarieReinitialiserAffectationsResult
{
    /**
     * @var int
     */
    private $AffectationsReinitialisees;

    /**
     * @return int
     */
    public function getAffectationsReinitialisees()
    {
        return $this->AffectationsReinitialisees;
    }

    /**
     * @param int $AffectationsReinitialisees
     * @return SWSSpectacleSalarieReinitialiserAffectationsResult
     */
    public function withAffectationsReinitialisees($AffectationsReinitialisees)
    {
        $new = clone $this;
        $new->AffectationsReinitialisees = $AffectationsReinitialisees;

        return $new;
    }
}

