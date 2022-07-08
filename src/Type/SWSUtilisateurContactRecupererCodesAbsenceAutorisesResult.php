<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurContactRecupererCodesAbsenceAutorisesResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSCodeAbsence
     */
    private $CodesAbsenceAutorises;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSCodeAbsence
     */
    private $CodesAbsenceFrequente;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSCodeAbsence
     */
    public function getCodesAbsenceAutorises()
    {
        return $this->CodesAbsenceAutorises;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSCodeAbsence $CodesAbsenceAutorises
     * @return SWSUtilisateurContactRecupererCodesAbsenceAutorisesResult
     */
    public function withCodesAbsenceAutorises($CodesAbsenceAutorises)
    {
        $new = clone $this;
        $new->CodesAbsenceAutorises = $CodesAbsenceAutorises;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSCodeAbsence
     */
    public function getCodesAbsenceFrequente()
    {
        return $this->CodesAbsenceFrequente;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSCodeAbsence $CodesAbsenceFrequente
     * @return SWSUtilisateurContactRecupererCodesAbsenceAutorisesResult
     */
    public function withCodesAbsenceFrequente($CodesAbsenceFrequente)
    {
        $new = clone $this;
        $new->CodesAbsenceFrequente = $CodesAbsenceFrequente;

        return $new;
    }
}

