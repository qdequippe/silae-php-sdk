<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSStatistiquesDADS
{
    /**
     * @var int
     */
    private $Annee;

    /**
     * @var int
     */
    private $NbSalaries;

    /**
     * @var int
     */
    private $Effectif3112;

    /**
     * @return int
     */
    public function getAnnee()
    {
        return $this->Annee;
    }

    /**
     * @param int $Annee
     * @return CPAISWSStatistiquesDADS
     */
    public function withAnnee($Annee)
    {
        $new = clone $this;
        $new->Annee = $Annee;

        return $new;
    }

    /**
     * @return int
     */
    public function getNbSalaries()
    {
        return $this->NbSalaries;
    }

    /**
     * @param int $NbSalaries
     * @return CPAISWSStatistiquesDADS
     */
    public function withNbSalaries($NbSalaries)
    {
        $new = clone $this;
        $new->NbSalaries = $NbSalaries;

        return $new;
    }

    /**
     * @return int
     */
    public function getEffectif3112()
    {
        return $this->Effectif3112;
    }

    /**
     * @param int $Effectif3112
     * @return CPAISWSStatistiquesDADS
     */
    public function withEffectif3112($Effectif3112)
    {
        $new = clone $this;
        $new->Effectif3112 = $Effectif3112;

        return $new;
    }
}

