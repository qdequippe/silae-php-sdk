<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurSalarieRecupererAbsencesResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSUtilisateurSalarieAbsence
     */
    private $Absences;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCVacancesScolairesZone
     */
    private $VacancesScolaires;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfDateTime
     */
    private $JoursFeries;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSUtilisateurSalarieAbsence
     */
    public function getAbsences()
    {
        return $this->Absences;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSUtilisateurSalarieAbsence $Absences
     * @return SWSUtilisateurSalarieRecupererAbsencesResult
     */
    public function withAbsences($Absences)
    {
        $new = clone $this;
        $new->Absences = $Absences;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCVacancesScolairesZone
     */
    public function getVacancesScolaires()
    {
        return $this->VacancesScolaires;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCVacancesScolairesZone $VacancesScolaires
     * @return SWSUtilisateurSalarieRecupererAbsencesResult
     */
    public function withVacancesScolaires($VacancesScolaires)
    {
        $new = clone $this;
        $new->VacancesScolaires = $VacancesScolaires;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfDateTime
     */
    public function getJoursFeries()
    {
        return $this->JoursFeries;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfDateTime $JoursFeries
     * @return SWSUtilisateurSalarieRecupererAbsencesResult
     */
    public function withJoursFeries($JoursFeries)
    {
        $new = clone $this;
        $new->JoursFeries = $JoursFeries;

        return $new;
    }
}

