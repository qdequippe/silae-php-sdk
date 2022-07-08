<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurSuperviseurRecupererCodesAbsenceAutorisesPourSalarieResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSCodeAbsence
     */
    private $CodesAbsenceAutorises;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSCodeAbsence
     */
    public function getCodesAbsenceAutorises()
    {
        return $this->CodesAbsenceAutorises;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSCodeAbsence $CodesAbsenceAutorises
     * @return SWSUtilisateurSuperviseurRecupererCodesAbsenceAutorisesPourSalarieResult
     */
    public function withCodesAbsenceAutorises($CodesAbsenceAutorises)
    {
        $new = clone $this;
        $new->CodesAbsenceAutorises = $CodesAbsenceAutorises;

        return $new;
    }
}

