<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSSalarieReinitialiserSaisiesResult
{
    /**
     * @var int
     */
    private $SaisiesHeuresReinitialisees;

    /**
     * @var int
     */
    private $SaisiesPrimesReinitialisees;

    /**
     * @var int
     */
    private $SaisiesAbsencesReinitialisees;

    /**
     * @return int
     */
    public function getSaisiesHeuresReinitialisees()
    {
        return $this->SaisiesHeuresReinitialisees;
    }

    /**
     * @param int $SaisiesHeuresReinitialisees
     * @return SWSSalarieReinitialiserSaisiesResult
     */
    public function withSaisiesHeuresReinitialisees($SaisiesHeuresReinitialisees)
    {
        $new = clone $this;
        $new->SaisiesHeuresReinitialisees = $SaisiesHeuresReinitialisees;

        return $new;
    }

    /**
     * @return int
     */
    public function getSaisiesPrimesReinitialisees()
    {
        return $this->SaisiesPrimesReinitialisees;
    }

    /**
     * @param int $SaisiesPrimesReinitialisees
     * @return SWSSalarieReinitialiserSaisiesResult
     */
    public function withSaisiesPrimesReinitialisees($SaisiesPrimesReinitialisees)
    {
        $new = clone $this;
        $new->SaisiesPrimesReinitialisees = $SaisiesPrimesReinitialisees;

        return $new;
    }

    /**
     * @return int
     */
    public function getSaisiesAbsencesReinitialisees()
    {
        return $this->SaisiesAbsencesReinitialisees;
    }

    /**
     * @param int $SaisiesAbsencesReinitialisees
     * @return SWSSalarieReinitialiserSaisiesResult
     */
    public function withSaisiesAbsencesReinitialisees($SaisiesAbsencesReinitialisees)
    {
        $new = clone $this;
        $new->SaisiesAbsencesReinitialisees = $SaisiesAbsencesReinitialisees;

        return $new;
    }
}

