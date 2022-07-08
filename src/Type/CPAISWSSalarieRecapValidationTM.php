<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSalarieRecapValidationTM
{
    /**
     * @var int
     */
    private $ID_PAISALARIE;

    /**
     * @var string
     */
    private $Matricule;

    /**
     * @var string
     */
    private $NomSalarie;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSAbsenceMin
     */
    private $Absences;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSDateDouble
     */
    private $Acomptes;

    /**
     * @var bool
     */
    private $ExistenceMessage;

    /**
     * @var bool
     */
    private $ExistenceMessageEnCours;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEmploiRecapValidationTM
     */
    private $Emploi;

    /**
     * @return int
     */
    public function getID_PAISALARIE()
    {
        return $this->ID_PAISALARIE;
    }

    /**
     * @param int $ID_PAISALARIE
     * @return CPAISWSSalarieRecapValidationTM
     */
    public function withID_PAISALARIE($ID_PAISALARIE)
    {
        $new = clone $this;
        $new->ID_PAISALARIE = $ID_PAISALARIE;

        return $new;
    }

    /**
     * @return string
     */
    public function getMatricule()
    {
        return $this->Matricule;
    }

    /**
     * @param string $Matricule
     * @return CPAISWSSalarieRecapValidationTM
     */
    public function withMatricule($Matricule)
    {
        $new = clone $this;
        $new->Matricule = $Matricule;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomSalarie()
    {
        return $this->NomSalarie;
    }

    /**
     * @param string $NomSalarie
     * @return CPAISWSSalarieRecapValidationTM
     */
    public function withNomSalarie($NomSalarie)
    {
        $new = clone $this;
        $new->NomSalarie = $NomSalarie;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSAbsenceMin
     */
    public function getAbsences()
    {
        return $this->Absences;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSAbsenceMin $Absences
     * @return CPAISWSSalarieRecapValidationTM
     */
    public function withAbsences($Absences)
    {
        $new = clone $this;
        $new->Absences = $Absences;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSDateDouble
     */
    public function getAcomptes()
    {
        return $this->Acomptes;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSDateDouble $Acomptes
     * @return CPAISWSSalarieRecapValidationTM
     */
    public function withAcomptes($Acomptes)
    {
        $new = clone $this;
        $new->Acomptes = $Acomptes;

        return $new;
    }

    /**
     * @return bool
     */
    public function getExistenceMessage()
    {
        return $this->ExistenceMessage;
    }

    /**
     * @param bool $ExistenceMessage
     * @return CPAISWSSalarieRecapValidationTM
     */
    public function withExistenceMessage($ExistenceMessage)
    {
        $new = clone $this;
        $new->ExistenceMessage = $ExistenceMessage;

        return $new;
    }

    /**
     * @return bool
     */
    public function getExistenceMessageEnCours()
    {
        return $this->ExistenceMessageEnCours;
    }

    /**
     * @param bool $ExistenceMessageEnCours
     * @return CPAISWSSalarieRecapValidationTM
     */
    public function withExistenceMessageEnCours($ExistenceMessageEnCours)
    {
        $new = clone $this;
        $new->ExistenceMessageEnCours = $ExistenceMessageEnCours;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEmploiRecapValidationTM
     */
    public function getEmploi()
    {
        return $this->Emploi;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEmploiRecapValidationTM $Emploi
     * @return CPAISWSSalarieRecapValidationTM
     */
    public function withEmploi($Emploi)
    {
        $new = clone $this;
        $new->Emploi = $Emploi;

        return $new;
    }
}

