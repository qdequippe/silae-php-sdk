<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSalarieBase
{
    /**
     * @var string
     */
    private $MatriculeSalarie;

    /**
     * @var string
     */
    private $NomAffiche;

    /**
     * @return string
     */
    public function getMatriculeSalarie()
    {
        return $this->MatriculeSalarie;
    }

    /**
     * @param string $MatriculeSalarie
     * @return CPAISWSSalarieBase
     */
    public function withMatriculeSalarie($MatriculeSalarie)
    {
        $new = clone $this;
        $new->MatriculeSalarie = $MatriculeSalarie;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomAffiche()
    {
        return $this->NomAffiche;
    }

    /**
     * @param string $NomAffiche
     * @return CPAISWSSalarieBase
     */
    public function withNomAffiche($NomAffiche)
    {
        $new = clone $this;
        $new->NomAffiche = $NomAffiche;

        return $new;
    }
}

