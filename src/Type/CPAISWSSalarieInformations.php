<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSalarieInformations
{
    /**
     * @var string
     */
    private $MatriculeSalarie;

    /**
     * @var string
     */
    private $NumeroSecuriteSociale;

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
     * @return CPAISWSSalarieInformations
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
    public function getNumeroSecuriteSociale()
    {
        return $this->NumeroSecuriteSociale;
    }

    /**
     * @param string $NumeroSecuriteSociale
     * @return CPAISWSSalarieInformations
     */
    public function withNumeroSecuriteSociale($NumeroSecuriteSociale)
    {
        $new = clone $this;
        $new->NumeroSecuriteSociale = $NumeroSecuriteSociale;

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
     * @return CPAISWSSalarieInformations
     */
    public function withNomAffiche($NomAffiche)
    {
        $new = clone $this;
        $new->NomAffiche = $NomAffiche;

        return $new;
    }
}

