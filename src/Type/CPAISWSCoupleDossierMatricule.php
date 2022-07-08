<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSCoupleDossierMatricule
{
    /**
     * @var string
     */
    private $NumeroDossier;

    /**
     * @var string
     */
    private $Matricule;

    /**
     * @return string
     */
    public function getNumeroDossier()
    {
        return $this->NumeroDossier;
    }

    /**
     * @param string $NumeroDossier
     * @return CPAISWSCoupleDossierMatricule
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return string
     */
    public function getMatricule()
    {
        return $this->Matricule;
    }

    /**
     * @param string $Matricule
     * @return CPAISWSCoupleDossierMatricule
     */
    public function withMatricule($Matricule)
    {
        $new = clone $this;
        $new->Matricule = $Matricule;

        return $new;
    }
}

