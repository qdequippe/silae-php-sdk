<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSEmploiRecapValidationTM
{
    /**
     * @var int
     */
    private $IdenfitiantEmploi;

    /**
     * @var string
     */
    private $IntituleEmploi;

    /**
     * @var int
     */
    private $TypeBulletin;

    /**
     * @var bool
     */
    private $ActiviteJournaliere;

    /**
     * @var bool
     */
    private $ConfirmationObligatoireDesHeures;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStringDouble
     */
    private $EV_Double;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStringString
     */
    private $EV_String;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStringDouble
     */
    private $Heures;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStringDouble
     */
    private $ActiviteHebdomadaire;

    /**
     * @return int
     */
    public function getIdenfitiantEmploi()
    {
        return $this->IdenfitiantEmploi;
    }

    /**
     * @param int $IdenfitiantEmploi
     * @return CPAISWSEmploiRecapValidationTM
     */
    public function withIdenfitiantEmploi($IdenfitiantEmploi)
    {
        $new = clone $this;
        $new->IdenfitiantEmploi = $IdenfitiantEmploi;

        return $new;
    }

    /**
     * @return string
     */
    public function getIntituleEmploi()
    {
        return $this->IntituleEmploi;
    }

    /**
     * @param string $IntituleEmploi
     * @return CPAISWSEmploiRecapValidationTM
     */
    public function withIntituleEmploi($IntituleEmploi)
    {
        $new = clone $this;
        $new->IntituleEmploi = $IntituleEmploi;

        return $new;
    }

    /**
     * @return int
     */
    public function getTypeBulletin()
    {
        return $this->TypeBulletin;
    }

    /**
     * @param int $TypeBulletin
     * @return CPAISWSEmploiRecapValidationTM
     */
    public function withTypeBulletin($TypeBulletin)
    {
        $new = clone $this;
        $new->TypeBulletin = $TypeBulletin;

        return $new;
    }

    /**
     * @return bool
     */
    public function getActiviteJournaliere()
    {
        return $this->ActiviteJournaliere;
    }

    /**
     * @param bool $ActiviteJournaliere
     * @return CPAISWSEmploiRecapValidationTM
     */
    public function withActiviteJournaliere($ActiviteJournaliere)
    {
        $new = clone $this;
        $new->ActiviteJournaliere = $ActiviteJournaliere;

        return $new;
    }

    /**
     * @return bool
     */
    public function getConfirmationObligatoireDesHeures()
    {
        return $this->ConfirmationObligatoireDesHeures;
    }

    /**
     * @param bool $ConfirmationObligatoireDesHeures
     * @return CPAISWSEmploiRecapValidationTM
     */
    public function withConfirmationObligatoireDesHeures($ConfirmationObligatoireDesHeures)
    {
        $new = clone $this;
        $new->ConfirmationObligatoireDesHeures = $ConfirmationObligatoireDesHeures;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStringDouble
     */
    public function getEV_Double()
    {
        return $this->EV_Double;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStringDouble $EV_Double
     * @return CPAISWSEmploiRecapValidationTM
     */
    public function withEV_Double($EV_Double)
    {
        $new = clone $this;
        $new->EV_Double = $EV_Double;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStringString
     */
    public function getEV_String()
    {
        return $this->EV_String;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStringString $EV_String
     * @return CPAISWSEmploiRecapValidationTM
     */
    public function withEV_String($EV_String)
    {
        $new = clone $this;
        $new->EV_String = $EV_String;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStringDouble
     */
    public function getHeures()
    {
        return $this->Heures;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStringDouble $Heures
     * @return CPAISWSEmploiRecapValidationTM
     */
    public function withHeures($Heures)
    {
        $new = clone $this;
        $new->Heures = $Heures;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStringDouble
     */
    public function getActiviteHebdomadaire()
    {
        return $this->ActiviteHebdomadaire;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStringDouble $ActiviteHebdomadaire
     * @return CPAISWSEmploiRecapValidationTM
     */
    public function withActiviteHebdomadaire($ActiviteHebdomadaire)
    {
        $new = clone $this;
        $new->ActiviteHebdomadaire = $ActiviteHebdomadaire;

        return $new;
    }
}

