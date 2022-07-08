<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSSalariesConfirmerSaisiesResult
{
    /**
     * @var int
     */
    private $SaisiesHeuresConfirmees;

    /**
     * @var int
     */
    private $SaisiesPrimesConfirmees;

    /**
     * @return int
     */
    public function getSaisiesHeuresConfirmees()
    {
        return $this->SaisiesHeuresConfirmees;
    }

    /**
     * @param int $SaisiesHeuresConfirmees
     * @return SWSSalariesConfirmerSaisiesResult
     */
    public function withSaisiesHeuresConfirmees($SaisiesHeuresConfirmees)
    {
        $new = clone $this;
        $new->SaisiesHeuresConfirmees = $SaisiesHeuresConfirmees;

        return $new;
    }

    /**
     * @return int
     */
    public function getSaisiesPrimesConfirmees()
    {
        return $this->SaisiesPrimesConfirmees;
    }

    /**
     * @param int $SaisiesPrimesConfirmees
     * @return SWSSalariesConfirmerSaisiesResult
     */
    public function withSaisiesPrimesConfirmees($SaisiesPrimesConfirmees)
    {
        $new = clone $this;
        $new->SaisiesPrimesConfirmees = $SaisiesPrimesConfirmees;

        return $new;
    }
}

