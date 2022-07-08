<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurSalarieRecupererAbsencesGroupeesResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSUtilisateurSalarieAbsenceSimple
     */
    private $AbsencesSimples;

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
     * @var string
     */
    private $NomGroupe;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSUtilisateurSalarieAbsenceSimple
     */
    public function getAbsencesSimples()
    {
        return $this->AbsencesSimples;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSUtilisateurSalarieAbsenceSimple $AbsencesSimples
     * @return SWSUtilisateurSalarieRecupererAbsencesGroupeesResult
     */
    public function withAbsencesSimples($AbsencesSimples)
    {
        $new = clone $this;
        $new->AbsencesSimples = $AbsencesSimples;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSUtilisateurSalarieAbsence
     */
    public function getAbsences()
    {
        return $this->Absences;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSUtilisateurSalarieAbsence $Absences
     * @return SWSUtilisateurSalarieRecupererAbsencesGroupeesResult
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
     * @return SWSUtilisateurSalarieRecupererAbsencesGroupeesResult
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
     * @return SWSUtilisateurSalarieRecupererAbsencesGroupeesResult
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
     * @return SWSUtilisateurSalarieRecupererAbsencesGroupeesResult
     */
    public function withJoursFeries($JoursFeries)
    {
        $new = clone $this;
        $new->JoursFeries = $JoursFeries;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomGroupe()
    {
        return $this->NomGroupe;
    }

    /**
     * @param string $NomGroupe
     * @return SWSUtilisateurSalarieRecupererAbsencesGroupeesResult
     */
    public function withNomGroupe($NomGroupe)
    {
        $new = clone $this;
        $new->NomGroupe = $NomGroupe;

        return $new;
    }
}

