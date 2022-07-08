<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurSuperviseurAcquisitionSAResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSAbsenceTM
     */
    private $Absences;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCVacancesScolairesZone
     */
    private $VacancesScolaires;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieTM
     */
    private $Salaries;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSJoursTravaillesTM
     */
    private $JoursTravailles;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSAbsenceTM
     */
    public function getAbsences()
    {
        return $this->Absences;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSAbsenceTM $Absences
     * @return SWSUtilisateurSuperviseurAcquisitionSAResult
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
     * @return SWSUtilisateurSuperviseurAcquisitionSAResult
     */
    public function withVacancesScolaires($VacancesScolaires)
    {
        $new = clone $this;
        $new->VacancesScolaires = $VacancesScolaires;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieTM
     */
    public function getSalaries()
    {
        return $this->Salaries;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieTM $Salaries
     * @return SWSUtilisateurSuperviseurAcquisitionSAResult
     */
    public function withSalaries($Salaries)
    {
        $new = clone $this;
        $new->Salaries = $Salaries;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSJoursTravaillesTM
     */
    public function getJoursTravailles()
    {
        return $this->JoursTravailles;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSJoursTravaillesTM $JoursTravailles
     * @return SWSUtilisateurSuperviseurAcquisitionSAResult
     */
    public function withJoursTravailles($JoursTravailles)
    {
        $new = clone $this;
        $new->JoursTravailles = $JoursTravailles;

        return $new;
    }
}

