<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurContactAjouterAbsenceResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceTM
     */
    private $Absence;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceTM
     */
    public function getAbsence()
    {
        return $this->Absence;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceTM $Absence
     * @return SWSUtilisateurContactAjouterAbsenceResult
     */
    public function withAbsence($Absence)
    {
        $new = clone $this;
        $new->Absence = $Absence;

        return $new;
    }
}

