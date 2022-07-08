<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSoldeReposSalarie
{
    /**
     * @var string
     */
    private $Matricule;

    /**
     * @var string
     */
    private $NomAffiche;

    /**
     * @var float
     */
    private $CPN1Acquis;

    /**
     * @var float
     */
    private $CPN1Pris;

    /**
     * @var float
     */
    private $CPN1Solde;

    /**
     * @var float
     */
    private $CPN1Provision;

    /**
     * @var float
     */
    private $CPNAcquis;

    /**
     * @var float
     */
    private $CPNPris;

    /**
     * @var float
     */
    private $CPNSolde;

    /**
     * @var float
     */
    private $CPNProvision;

    /**
     * @var float
     */
    private $CPProvision;

    /**
     * @var float
     */
    private $CPTauxChargesPatronales;

    /**
     * @var float
     */
    private $CPMontantChargesPatronales;

    /**
     * @var float
     */
    private $CPTotalProvision;

    /**
     * @var float
     */
    private $RTTAcquis;

    /**
     * @var float
     */
    private $RTTPris;

    /**
     * @var float
     */
    private $RTTSolde;

    /**
     * @var float
     */
    private $RTTProvision;

    /**
     * @var float
     */
    private $RTTMontantChargesPatronales;

    /**
     * @var float
     */
    private $RTTTotalProvision;

    /**
     * @var float
     */
    private $CPSupAcquis;

    /**
     * @var float
     */
    private $CPSupPris;

    /**
     * @var float
     */
    private $CPSupSolde;

    /**
     * @var float
     */
    private $CPSupProvision;

    /**
     * @var float
     */
    private $CPSupMontantChargesPatronales;

    /**
     * @var float
     */
    private $CPSupTotalProvision;

    /**
     * @var float
     */
    private $CPSup2Acquis;

    /**
     * @var float
     */
    private $CPSup2Pris;

    /**
     * @var float
     */
    private $CPSup2Solde;

    /**
     * @var float
     */
    private $CPSup2Provision;

    /**
     * @var float
     */
    private $CPSup2MontantChargesPatronales;

    /**
     * @var float
     */
    private $CPSup2TotalProvision;

    /**
     * @var float
     */
    private $RCRSolde;

    /**
     * @var float
     */
    private $RCRProvision;

    /**
     * @var float
     */
    private $RCCSolde;

    /**
     * @var float
     */
    private $RCCProvision;

    /**
     * @var float
     */
    private $RCOSolde;

    /**
     * @var float
     */
    private $RCOProvision;

    /**
     * @var float
     */
    private $RCProvision;

    /**
     * @return string
     */
    public function getMatricule()
    {
        return $this->Matricule;
    }

    /**
     * @param string $Matricule
     * @return CPAISWSSoldeReposSalarie
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
    public function getNomAffiche()
    {
        return $this->NomAffiche;
    }

    /**
     * @param string $NomAffiche
     * @return CPAISWSSoldeReposSalarie
     */
    public function withNomAffiche($NomAffiche)
    {
        $new = clone $this;
        $new->NomAffiche = $NomAffiche;

        return $new;
    }

    /**
     * @return float
     */
    public function getCPN1Acquis()
    {
        return $this->CPN1Acquis;
    }

    /**
     * @param float $CPN1Acquis
     * @return CPAISWSSoldeReposSalarie
     */
    public function withCPN1Acquis($CPN1Acquis)
    {
        $new = clone $this;
        $new->CPN1Acquis = $CPN1Acquis;

        return $new;
    }

    /**
     * @return float
     */
    public function getCPN1Pris()
    {
        return $this->CPN1Pris;
    }

    /**
     * @param float $CPN1Pris
     * @return CPAISWSSoldeReposSalarie
     */
    public function withCPN1Pris($CPN1Pris)
    {
        $new = clone $this;
        $new->CPN1Pris = $CPN1Pris;

        return $new;
    }

    /**
     * @return float
     */
    public function getCPN1Solde()
    {
        return $this->CPN1Solde;
    }

    /**
     * @param float $CPN1Solde
     * @return CPAISWSSoldeReposSalarie
     */
    public function withCPN1Solde($CPN1Solde)
    {
        $new = clone $this;
        $new->CPN1Solde = $CPN1Solde;

        return $new;
    }

    /**
     * @return float
     */
    public function getCPN1Provision()
    {
        return $this->CPN1Provision;
    }

    /**
     * @param float $CPN1Provision
     * @return CPAISWSSoldeReposSalarie
     */
    public function withCPN1Provision($CPN1Provision)
    {
        $new = clone $this;
        $new->CPN1Provision = $CPN1Provision;

        return $new;
    }

    /**
     * @return float
     */
    public function getCPNAcquis()
    {
        return $this->CPNAcquis;
    }

    /**
     * @param float $CPNAcquis
     * @return CPAISWSSoldeReposSalarie
     */
    public function withCPNAcquis($CPNAcquis)
    {
        $new = clone $this;
        $new->CPNAcquis = $CPNAcquis;

        return $new;
    }

    /**
     * @return float
     */
    public function getCPNPris()
    {
        return $this->CPNPris;
    }

    /**
     * @param float $CPNPris
     * @return CPAISWSSoldeReposSalarie
     */
    public function withCPNPris($CPNPris)
    {
        $new = clone $this;
        $new->CPNPris = $CPNPris;

        return $new;
    }

    /**
     * @return float
     */
    public function getCPNSolde()
    {
        return $this->CPNSolde;
    }

    /**
     * @param float $CPNSolde
     * @return CPAISWSSoldeReposSalarie
     */
    public function withCPNSolde($CPNSolde)
    {
        $new = clone $this;
        $new->CPNSolde = $CPNSolde;

        return $new;
    }

    /**
     * @return float
     */
    public function getCPNProvision()
    {
        return $this->CPNProvision;
    }

    /**
     * @param float $CPNProvision
     * @return CPAISWSSoldeReposSalarie
     */
    public function withCPNProvision($CPNProvision)
    {
        $new = clone $this;
        $new->CPNProvision = $CPNProvision;

        return $new;
    }

    /**
     * @return float
     */
    public function getCPProvision()
    {
        return $this->CPProvision;
    }

    /**
     * @param float $CPProvision
     * @return CPAISWSSoldeReposSalarie
     */
    public function withCPProvision($CPProvision)
    {
        $new = clone $this;
        $new->CPProvision = $CPProvision;

        return $new;
    }

    /**
     * @return float
     */
    public function getCPTauxChargesPatronales()
    {
        return $this->CPTauxChargesPatronales;
    }

    /**
     * @param float $CPTauxChargesPatronales
     * @return CPAISWSSoldeReposSalarie
     */
    public function withCPTauxChargesPatronales($CPTauxChargesPatronales)
    {
        $new = clone $this;
        $new->CPTauxChargesPatronales = $CPTauxChargesPatronales;

        return $new;
    }

    /**
     * @return float
     */
    public function getCPMontantChargesPatronales()
    {
        return $this->CPMontantChargesPatronales;
    }

    /**
     * @param float $CPMontantChargesPatronales
     * @return CPAISWSSoldeReposSalarie
     */
    public function withCPMontantChargesPatronales($CPMontantChargesPatronales)
    {
        $new = clone $this;
        $new->CPMontantChargesPatronales = $CPMontantChargesPatronales;

        return $new;
    }

    /**
     * @return float
     */
    public function getCPTotalProvision()
    {
        return $this->CPTotalProvision;
    }

    /**
     * @param float $CPTotalProvision
     * @return CPAISWSSoldeReposSalarie
     */
    public function withCPTotalProvision($CPTotalProvision)
    {
        $new = clone $this;
        $new->CPTotalProvision = $CPTotalProvision;

        return $new;
    }

    /**
     * @return float
     */
    public function getRTTAcquis()
    {
        return $this->RTTAcquis;
    }

    /**
     * @param float $RTTAcquis
     * @return CPAISWSSoldeReposSalarie
     */
    public function withRTTAcquis($RTTAcquis)
    {
        $new = clone $this;
        $new->RTTAcquis = $RTTAcquis;

        return $new;
    }

    /**
     * @return float
     */
    public function getRTTPris()
    {
        return $this->RTTPris;
    }

    /**
     * @param float $RTTPris
     * @return CPAISWSSoldeReposSalarie
     */
    public function withRTTPris($RTTPris)
    {
        $new = clone $this;
        $new->RTTPris = $RTTPris;

        return $new;
    }

    /**
     * @return float
     */
    public function getRTTSolde()
    {
        return $this->RTTSolde;
    }

    /**
     * @param float $RTTSolde
     * @return CPAISWSSoldeReposSalarie
     */
    public function withRTTSolde($RTTSolde)
    {
        $new = clone $this;
        $new->RTTSolde = $RTTSolde;

        return $new;
    }

    /**
     * @return float
     */
    public function getRTTProvision()
    {
        return $this->RTTProvision;
    }

    /**
     * @param float $RTTProvision
     * @return CPAISWSSoldeReposSalarie
     */
    public function withRTTProvision($RTTProvision)
    {
        $new = clone $this;
        $new->RTTProvision = $RTTProvision;

        return $new;
    }

    /**
     * @return float
     */
    public function getRTTMontantChargesPatronales()
    {
        return $this->RTTMontantChargesPatronales;
    }

    /**
     * @param float $RTTMontantChargesPatronales
     * @return CPAISWSSoldeReposSalarie
     */
    public function withRTTMontantChargesPatronales($RTTMontantChargesPatronales)
    {
        $new = clone $this;
        $new->RTTMontantChargesPatronales = $RTTMontantChargesPatronales;

        return $new;
    }

    /**
     * @return float
     */
    public function getRTTTotalProvision()
    {
        return $this->RTTTotalProvision;
    }

    /**
     * @param float $RTTTotalProvision
     * @return CPAISWSSoldeReposSalarie
     */
    public function withRTTTotalProvision($RTTTotalProvision)
    {
        $new = clone $this;
        $new->RTTTotalProvision = $RTTTotalProvision;

        return $new;
    }

    /**
     * @return float
     */
    public function getCPSupAcquis()
    {
        return $this->CPSupAcquis;
    }

    /**
     * @param float $CPSupAcquis
     * @return CPAISWSSoldeReposSalarie
     */
    public function withCPSupAcquis($CPSupAcquis)
    {
        $new = clone $this;
        $new->CPSupAcquis = $CPSupAcquis;

        return $new;
    }

    /**
     * @return float
     */
    public function getCPSupPris()
    {
        return $this->CPSupPris;
    }

    /**
     * @param float $CPSupPris
     * @return CPAISWSSoldeReposSalarie
     */
    public function withCPSupPris($CPSupPris)
    {
        $new = clone $this;
        $new->CPSupPris = $CPSupPris;

        return $new;
    }

    /**
     * @return float
     */
    public function getCPSupSolde()
    {
        return $this->CPSupSolde;
    }

    /**
     * @param float $CPSupSolde
     * @return CPAISWSSoldeReposSalarie
     */
    public function withCPSupSolde($CPSupSolde)
    {
        $new = clone $this;
        $new->CPSupSolde = $CPSupSolde;

        return $new;
    }

    /**
     * @return float
     */
    public function getCPSupProvision()
    {
        return $this->CPSupProvision;
    }

    /**
     * @param float $CPSupProvision
     * @return CPAISWSSoldeReposSalarie
     */
    public function withCPSupProvision($CPSupProvision)
    {
        $new = clone $this;
        $new->CPSupProvision = $CPSupProvision;

        return $new;
    }

    /**
     * @return float
     */
    public function getCPSupMontantChargesPatronales()
    {
        return $this->CPSupMontantChargesPatronales;
    }

    /**
     * @param float $CPSupMontantChargesPatronales
     * @return CPAISWSSoldeReposSalarie
     */
    public function withCPSupMontantChargesPatronales($CPSupMontantChargesPatronales)
    {
        $new = clone $this;
        $new->CPSupMontantChargesPatronales = $CPSupMontantChargesPatronales;

        return $new;
    }

    /**
     * @return float
     */
    public function getCPSupTotalProvision()
    {
        return $this->CPSupTotalProvision;
    }

    /**
     * @param float $CPSupTotalProvision
     * @return CPAISWSSoldeReposSalarie
     */
    public function withCPSupTotalProvision($CPSupTotalProvision)
    {
        $new = clone $this;
        $new->CPSupTotalProvision = $CPSupTotalProvision;

        return $new;
    }

    /**
     * @return float
     */
    public function getCPSup2Acquis()
    {
        return $this->CPSup2Acquis;
    }

    /**
     * @param float $CPSup2Acquis
     * @return CPAISWSSoldeReposSalarie
     */
    public function withCPSup2Acquis($CPSup2Acquis)
    {
        $new = clone $this;
        $new->CPSup2Acquis = $CPSup2Acquis;

        return $new;
    }

    /**
     * @return float
     */
    public function getCPSup2Pris()
    {
        return $this->CPSup2Pris;
    }

    /**
     * @param float $CPSup2Pris
     * @return CPAISWSSoldeReposSalarie
     */
    public function withCPSup2Pris($CPSup2Pris)
    {
        $new = clone $this;
        $new->CPSup2Pris = $CPSup2Pris;

        return $new;
    }

    /**
     * @return float
     */
    public function getCPSup2Solde()
    {
        return $this->CPSup2Solde;
    }

    /**
     * @param float $CPSup2Solde
     * @return CPAISWSSoldeReposSalarie
     */
    public function withCPSup2Solde($CPSup2Solde)
    {
        $new = clone $this;
        $new->CPSup2Solde = $CPSup2Solde;

        return $new;
    }

    /**
     * @return float
     */
    public function getCPSup2Provision()
    {
        return $this->CPSup2Provision;
    }

    /**
     * @param float $CPSup2Provision
     * @return CPAISWSSoldeReposSalarie
     */
    public function withCPSup2Provision($CPSup2Provision)
    {
        $new = clone $this;
        $new->CPSup2Provision = $CPSup2Provision;

        return $new;
    }

    /**
     * @return float
     */
    public function getCPSup2MontantChargesPatronales()
    {
        return $this->CPSup2MontantChargesPatronales;
    }

    /**
     * @param float $CPSup2MontantChargesPatronales
     * @return CPAISWSSoldeReposSalarie
     */
    public function withCPSup2MontantChargesPatronales($CPSup2MontantChargesPatronales)
    {
        $new = clone $this;
        $new->CPSup2MontantChargesPatronales = $CPSup2MontantChargesPatronales;

        return $new;
    }

    /**
     * @return float
     */
    public function getCPSup2TotalProvision()
    {
        return $this->CPSup2TotalProvision;
    }

    /**
     * @param float $CPSup2TotalProvision
     * @return CPAISWSSoldeReposSalarie
     */
    public function withCPSup2TotalProvision($CPSup2TotalProvision)
    {
        $new = clone $this;
        $new->CPSup2TotalProvision = $CPSup2TotalProvision;

        return $new;
    }

    /**
     * @return float
     */
    public function getRCRSolde()
    {
        return $this->RCRSolde;
    }

    /**
     * @param float $RCRSolde
     * @return CPAISWSSoldeReposSalarie
     */
    public function withRCRSolde($RCRSolde)
    {
        $new = clone $this;
        $new->RCRSolde = $RCRSolde;

        return $new;
    }

    /**
     * @return float
     */
    public function getRCRProvision()
    {
        return $this->RCRProvision;
    }

    /**
     * @param float $RCRProvision
     * @return CPAISWSSoldeReposSalarie
     */
    public function withRCRProvision($RCRProvision)
    {
        $new = clone $this;
        $new->RCRProvision = $RCRProvision;

        return $new;
    }

    /**
     * @return float
     */
    public function getRCCSolde()
    {
        return $this->RCCSolde;
    }

    /**
     * @param float $RCCSolde
     * @return CPAISWSSoldeReposSalarie
     */
    public function withRCCSolde($RCCSolde)
    {
        $new = clone $this;
        $new->RCCSolde = $RCCSolde;

        return $new;
    }

    /**
     * @return float
     */
    public function getRCCProvision()
    {
        return $this->RCCProvision;
    }

    /**
     * @param float $RCCProvision
     * @return CPAISWSSoldeReposSalarie
     */
    public function withRCCProvision($RCCProvision)
    {
        $new = clone $this;
        $new->RCCProvision = $RCCProvision;

        return $new;
    }

    /**
     * @return float
     */
    public function getRCOSolde()
    {
        return $this->RCOSolde;
    }

    /**
     * @param float $RCOSolde
     * @return CPAISWSSoldeReposSalarie
     */
    public function withRCOSolde($RCOSolde)
    {
        $new = clone $this;
        $new->RCOSolde = $RCOSolde;

        return $new;
    }

    /**
     * @return float
     */
    public function getRCOProvision()
    {
        return $this->RCOProvision;
    }

    /**
     * @param float $RCOProvision
     * @return CPAISWSSoldeReposSalarie
     */
    public function withRCOProvision($RCOProvision)
    {
        $new = clone $this;
        $new->RCOProvision = $RCOProvision;

        return $new;
    }

    /**
     * @return float
     */
    public function getRCProvision()
    {
        return $this->RCProvision;
    }

    /**
     * @param float $RCProvision
     * @return CPAISWSSoldeReposSalarie
     */
    public function withRCProvision($RCProvision)
    {
        $new = clone $this;
        $new->RCProvision = $RCProvision;

        return $new;
    }
}

