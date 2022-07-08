<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurSalarieAcquisitionSAResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSAbsenceTM
     */
    private $Absences;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSAbsenceSimpleTM
     */
    private $AbsencesSimples;

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
     * @return SWSUtilisateurSalarieAcquisitionSAResult
     */
    public function withAbsences($Absences)
    {
        $new = clone $this;
        $new->Absences = $Absences;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSAbsenceSimpleTM
     */
    public function getAbsencesSimples()
    {
        return $this->AbsencesSimples;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSAbsenceSimpleTM $AbsencesSimples
     * @return SWSUtilisateurSalarieAcquisitionSAResult
     */
    public function withAbsencesSimples($AbsencesSimples)
    {
        $new = clone $this;
        $new->AbsencesSimples = $AbsencesSimples;

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
     * @return SWSUtilisateurSalarieAcquisitionSAResult
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
     * @return SWSUtilisateurSalarieAcquisitionSAResult
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
     * @return SWSUtilisateurSalarieAcquisitionSAResult
     */
    public function withJoursTravailles($JoursTravailles)
    {
        $new = clone $this;
        $new->JoursTravailles = $JoursTravailles;

        return $new;
    }
}

