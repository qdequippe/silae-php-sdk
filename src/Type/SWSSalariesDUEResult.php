<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSSalariesDUEResult
{
    /**
     * @var int
     */
    private $NbDUEEnvoyees;

    /**
     * @return int
     */
    public function getNbDUEEnvoyees()
    {
        return $this->NbDUEEnvoyees;
    }

    /**
     * @param int $NbDUEEnvoyees
     * @return SWSSalariesDUEResult
     */
    public function withNbDUEEnvoyees($NbDUEEnvoyees)
    {
        $new = clone $this;
        $new->NbDUEEnvoyees = $NbDUEEnvoyees;

        return $new;
    }
}

