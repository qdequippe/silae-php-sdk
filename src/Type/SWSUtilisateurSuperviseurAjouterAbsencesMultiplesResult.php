<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurSuperviseurAjouterAbsencesMultiplesResult
{
    /**
     * @var int
     */
    private $NombreAbsencesAjoutees;

    /**
     * @return int
     */
    public function getNombreAbsencesAjoutees()
    {
        return $this->NombreAbsencesAjoutees;
    }

    /**
     * @param int $NombreAbsencesAjoutees
     * @return SWSUtilisateurSuperviseurAjouterAbsencesMultiplesResult
     */
    public function withNombreAbsencesAjoutees($NombreAbsencesAjoutees)
    {
        $new = clone $this;
        $new->NombreAbsencesAjoutees = $NombreAbsencesAjoutees;

        return $new;
    }
}

