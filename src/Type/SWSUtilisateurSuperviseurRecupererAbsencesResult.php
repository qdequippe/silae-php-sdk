<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurSuperviseurRecupererAbsencesResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSUtilisateurSalarieAbsence
     */
    private $Absences;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieSupervise
     */
    private $SalariesSupervises;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCVacancesScolairesZone
     */
    private $VacancesScolaires;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfDateTime
     */
    private $JoursFeries;

    /**
     * @var bool
     */
    private $CPAutorises;

    /**
     * @var bool
     */
    private $RTTAutorises;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSUtilisateurSalarieAbsence
     */
    public function getAbsences()
    {
        return $this->Absences;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSUtilisateurSalarieAbsence $Absences
     * @return SWSUtilisateurSuperviseurRecupererAbsencesResult
     */
    public function withAbsences($Absences)
    {
        $new = clone $this;
        $new->Absences = $Absences;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieSupervise
     */
    public function getSalariesSupervises()
    {
        return $this->SalariesSupervises;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieSupervise $SalariesSupervises
     * @return SWSUtilisateurSuperviseurRecupererAbsencesResult
     */
    public function withSalariesSupervises($SalariesSupervises)
    {
        $new = clone $this;
        $new->SalariesSupervises = $SalariesSupervises;

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
     * @return SWSUtilisateurSuperviseurRecupererAbsencesResult
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
     * @return SWSUtilisateurSuperviseurRecupererAbsencesResult
     */
    public function withJoursFeries($JoursFeries)
    {
        $new = clone $this;
        $new->JoursFeries = $JoursFeries;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCPAutorises()
    {
        return $this->CPAutorises;
    }

    /**
     * @param bool $CPAutorises
     * @return SWSUtilisateurSuperviseurRecupererAbsencesResult
     */
    public function withCPAutorises($CPAutorises)
    {
        $new = clone $this;
        $new->CPAutorises = $CPAutorises;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRTTAutorises()
    {
        return $this->RTTAutorises;
    }

    /**
     * @param bool $RTTAutorises
     * @return SWSUtilisateurSuperviseurRecupererAbsencesResult
     */
    public function withRTTAutorises($RTTAutorises)
    {
        $new = clone $this;
        $new->RTTAutorises = $RTTAutorises;

        return $new;
    }
}

