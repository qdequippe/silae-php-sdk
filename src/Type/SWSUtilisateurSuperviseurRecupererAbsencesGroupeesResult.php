<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurSuperviseurRecupererAbsencesGroupeesResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSUtilisateurSalarieAbsence
     */
    private $Absences;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieGroupes
     */
    private $Salaries;

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
     * @return SWSUtilisateurSuperviseurRecupererAbsencesGroupeesResult
     */
    public function withAbsences($Absences)
    {
        $new = clone $this;
        $new->Absences = $Absences;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieGroupes
     */
    public function getSalaries()
    {
        return $this->Salaries;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieGroupes $Salaries
     * @return SWSUtilisateurSuperviseurRecupererAbsencesGroupeesResult
     */
    public function withSalaries($Salaries)
    {
        $new = clone $this;
        $new->Salaries = $Salaries;

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
     * @return SWSUtilisateurSuperviseurRecupererAbsencesGroupeesResult
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
     * @return SWSUtilisateurSuperviseurRecupererAbsencesGroupeesResult
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
     * @return SWSUtilisateurSuperviseurRecupererAbsencesGroupeesResult
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
     * @return SWSUtilisateurSuperviseurRecupererAbsencesGroupeesResult
     */
    public function withRTTAutorises($RTTAutorises)
    {
        $new = clone $this;
        $new->RTTAutorises = $RTTAutorises;

        return $new;
    }
}

