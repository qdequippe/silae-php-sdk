<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSExtraSalarieReinitialiserVacationsResult
{
    /**
     * @var int
     */
    private $VacationsReinitialisees;

    /**
     * @return int
     */
    public function getVacationsReinitialisees()
    {
        return $this->VacationsReinitialisees;
    }

    /**
     * @param int $VacationsReinitialisees
     * @return SWSExtraSalarieReinitialiserVacationsResult
     */
    public function withVacationsReinitialisees($VacationsReinitialisees)
    {
        $new = clone $this;
        $new->VacationsReinitialisees = $VacationsReinitialisees;

        return $new;
    }
}

