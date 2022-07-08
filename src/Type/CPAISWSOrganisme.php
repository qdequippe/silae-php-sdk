<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSOrganisme
{
    /**
     * @var string
     */
    private $CodeOrganisme;

    /**
     * @var string
     */
    private $CodeInterne;

    /**
     * @var string
     */
    private $CodeNature;

    /**
     * @var string
     */
    private $NomInterneEtablissement;

    /**
     * @var string
     */
    private $NumeroAffiliation;

    /**
     * @var int
     */
    private $Periodicite;

    /**
     * @var int
     */
    private $JourPaiement;

    /**
     * @var string
     */
    private $FiltreSalaries;

    /**
     * @var string
     */
    private $FiltreCodesLibelles;

    /**
     * @var bool
     */
    private $EDI;

    /**
     * @var int
     */
    private $EDIModePaiement;

    /**
     * @var string
     */
    private $NumeroRattachement;

    /**
     * @var string
     */
    private $CodePopulation;

    /**
     * @var string
     */
    private $CodeOption;

    /**
     * @var string
     */
    private $CodeDelegataireDeGestion;

    /**
     * @return string
     */
    public function getCodeOrganisme()
    {
        return $this->CodeOrganisme;
    }

    /**
     * @param string $CodeOrganisme
     * @return CPAISWSOrganisme
     */
    public function withCodeOrganisme($CodeOrganisme)
    {
        $new = clone $this;
        $new->CodeOrganisme = $CodeOrganisme;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeInterne()
    {
        return $this->CodeInterne;
    }

    /**
     * @param string $CodeInterne
     * @return CPAISWSOrganisme
     */
    public function withCodeInterne($CodeInterne)
    {
        $new = clone $this;
        $new->CodeInterne = $CodeInterne;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeNature()
    {
        return $this->CodeNature;
    }

    /**
     * @param string $CodeNature
     * @return CPAISWSOrganisme
     */
    public function withCodeNature($CodeNature)
    {
        $new = clone $this;
        $new->CodeNature = $CodeNature;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomInterneEtablissement()
    {
        return $this->NomInterneEtablissement;
    }

    /**
     * @param string $NomInterneEtablissement
     * @return CPAISWSOrganisme
     */
    public function withNomInterneEtablissement($NomInterneEtablissement)
    {
        $new = clone $this;
        $new->NomInterneEtablissement = $NomInterneEtablissement;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumeroAffiliation()
    {
        return $this->NumeroAffiliation;
    }

    /**
     * @param string $NumeroAffiliation
     * @return CPAISWSOrganisme
     */
    public function withNumeroAffiliation($NumeroAffiliation)
    {
        $new = clone $this;
        $new->NumeroAffiliation = $NumeroAffiliation;

        return $new;
    }

    /**
     * @return int
     */
    public function getPeriodicite()
    {
        return $this->Periodicite;
    }

    /**
     * @param int $Periodicite
     * @return CPAISWSOrganisme
     */
    public function withPeriodicite($Periodicite)
    {
        $new = clone $this;
        $new->Periodicite = $Periodicite;

        return $new;
    }

    /**
     * @return int
     */
    public function getJourPaiement()
    {
        return $this->JourPaiement;
    }

    /**
     * @param int $JourPaiement
     * @return CPAISWSOrganisme
     */
    public function withJourPaiement($JourPaiement)
    {
        $new = clone $this;
        $new->JourPaiement = $JourPaiement;

        return $new;
    }

    /**
     * @return string
     */
    public function getFiltreSalaries()
    {
        return $this->FiltreSalaries;
    }

    /**
     * @param string $FiltreSalaries
     * @return CPAISWSOrganisme
     */
    public function withFiltreSalaries($FiltreSalaries)
    {
        $new = clone $this;
        $new->FiltreSalaries = $FiltreSalaries;

        return $new;
    }

    /**
     * @return string
     */
    public function getFiltreCodesLibelles()
    {
        return $this->FiltreCodesLibelles;
    }

    /**
     * @param string $FiltreCodesLibelles
     * @return CPAISWSOrganisme
     */
    public function withFiltreCodesLibelles($FiltreCodesLibelles)
    {
        $new = clone $this;
        $new->FiltreCodesLibelles = $FiltreCodesLibelles;

        return $new;
    }

    /**
     * @return bool
     */
    public function getEDI()
    {
        return $this->EDI;
    }

    /**
     * @param bool $EDI
     * @return CPAISWSOrganisme
     */
    public function withEDI($EDI)
    {
        $new = clone $this;
        $new->EDI = $EDI;

        return $new;
    }

    /**
     * @return int
     */
    public function getEDIModePaiement()
    {
        return $this->EDIModePaiement;
    }

    /**
     * @param int $EDIModePaiement
     * @return CPAISWSOrganisme
     */
    public function withEDIModePaiement($EDIModePaiement)
    {
        $new = clone $this;
        $new->EDIModePaiement = $EDIModePaiement;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumeroRattachement()
    {
        return $this->NumeroRattachement;
    }

    /**
     * @param string $NumeroRattachement
     * @return CPAISWSOrganisme
     */
    public function withNumeroRattachement($NumeroRattachement)
    {
        $new = clone $this;
        $new->NumeroRattachement = $NumeroRattachement;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodePopulation()
    {
        return $this->CodePopulation;
    }

    /**
     * @param string $CodePopulation
     * @return CPAISWSOrganisme
     */
    public function withCodePopulation($CodePopulation)
    {
        $new = clone $this;
        $new->CodePopulation = $CodePopulation;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeOption()
    {
        return $this->CodeOption;
    }

    /**
     * @param string $CodeOption
     * @return CPAISWSOrganisme
     */
    public function withCodeOption($CodeOption)
    {
        $new = clone $this;
        $new->CodeOption = $CodeOption;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeDelegataireDeGestion()
    {
        return $this->CodeDelegataireDeGestion;
    }

    /**
     * @param string $CodeDelegataireDeGestion
     * @return CPAISWSOrganisme
     */
    public function withCodeDelegataireDeGestion($CodeDelegataireDeGestion)
    {
        $new = clone $this;
        $new->CodeDelegataireDeGestion = $CodeDelegataireDeGestion;

        return $new;
    }
}

