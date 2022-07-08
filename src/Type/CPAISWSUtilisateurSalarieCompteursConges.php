<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSUtilisateurSalarieCompteursConges
{
    /**
     * @var \DateTimeInterface
     */
    private $PeriodeReferenceEnCours;

    /**
     * @var bool
     */
    private $CPActif;

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
    private $CPN1SoldeT0;

    /**
     * @var float
     */
    private $CPN1Demande;

    /**
     * @var string
     */
    private $CPN1Lib;

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
    private $CPNSoldeT0;

    /**
     * @var float
     */
    private $CPNDemande;

    /**
     * @var string
     */
    private $CPNLib;

    /**
     * @var bool
     */
    private $RTTActif;

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
    private $RTTSoldeT0;

    /**
     * @var float
     */
    private $RTTDemande;

    /**
     * @var string
     */
    private $RTTLib;

    /**
     * @var bool
     */
    private $RCRActif;

    /**
     * @var float
     */
    private $RCRAcquis;

    /**
     * @var float
     */
    private $RCRPris;

    /**
     * @var float
     */
    private $RCRSolde;

    /**
     * @var float
     */
    private $RCRSoldeT0;

    /**
     * @var float
     */
    private $RCRDemande;

    /**
     * @var string
     */
    private $RCRLib;

    /**
     * @var bool
     */
    private $RCCActif;

    /**
     * @var float
     */
    private $RCCAcquis;

    /**
     * @var float
     */
    private $RCCPris;

    /**
     * @var float
     */
    private $RCCSolde;

    /**
     * @var float
     */
    private $RCCSoldeT0;

    /**
     * @var float
     */
    private $RCCDemande;

    /**
     * @var string
     */
    private $RCCLib;

    /**
     * @var bool
     */
    private $RCOActif;

    /**
     * @var float
     */
    private $RCOAcquis;

    /**
     * @var float
     */
    private $RCOPris;

    /**
     * @var float
     */
    private $RCOSolde;

    /**
     * @var float
     */
    private $RCOSoldeT0;

    /**
     * @var float
     */
    private $RCODemande;

    /**
     * @var string
     */
    private $RCOLib;

    /**
     * @var bool
     */
    private $RFJActif;

    /**
     * @var float
     */
    private $RFJAcquis;

    /**
     * @var float
     */
    private $RFJPris;

    /**
     * @var float
     */
    private $RFJSolde;

    /**
     * @var float
     */
    private $RFJSoldeT0;

    /**
     * @var float
     */
    private $RFJDemande;

    /**
     * @var string
     */
    private $RFJLib;

    /**
     * @var bool
     */
    private $CPSupActif;

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
    private $CPSupSoldeT0;

    /**
     * @var float
     */
    private $CPSupDemande;

    /**
     * @var string
     */
    private $CPSupLib;

    /**
     * @var bool
     */
    private $CPSup2Actif;

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
    private $CPSup2SoldeT0;

    /**
     * @var float
     */
    private $CPSup2Demande;

    /**
     * @var string
     */
    private $CPSup2Lib;

    /**
     * @var bool
     */
    private $DIFActif;

    /**
     * @var float
     */
    private $DIFAcquis;

    /**
     * @var float
     */
    private $DIFAcquisFutur;

    /**
     * @var float
     */
    private $DIFPris;

    /**
     * @var float
     */
    private $DIFSolde;

    /**
     * @var float
     */
    private $DIFSoldeT0;

    /**
     * @var float
     */
    private $DIFDemande;

    /**
     * @var string
     */
    private $DIFLib;

    /**
     * @var string
     */
    private $ErrMsg;

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeReferenceEnCours()
    {
        return $this->PeriodeReferenceEnCours;
    }

    /**
     * @param \DateTimeInterface $PeriodeReferenceEnCours
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withPeriodeReferenceEnCours($PeriodeReferenceEnCours)
    {
        $new = clone $this;
        $new->PeriodeReferenceEnCours = $PeriodeReferenceEnCours;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCPActif()
    {
        return $this->CPActif;
    }

    /**
     * @param bool $CPActif
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withCPActif($CPActif)
    {
        $new = clone $this;
        $new->CPActif = $CPActif;

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
     * @return CPAISWSUtilisateurSalarieCompteursConges
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
     * @return CPAISWSUtilisateurSalarieCompteursConges
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
     * @return CPAISWSUtilisateurSalarieCompteursConges
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
    public function getCPN1SoldeT0()
    {
        return $this->CPN1SoldeT0;
    }

    /**
     * @param float $CPN1SoldeT0
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withCPN1SoldeT0($CPN1SoldeT0)
    {
        $new = clone $this;
        $new->CPN1SoldeT0 = $CPN1SoldeT0;

        return $new;
    }

    /**
     * @return float
     */
    public function getCPN1Demande()
    {
        return $this->CPN1Demande;
    }

    /**
     * @param float $CPN1Demande
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withCPN1Demande($CPN1Demande)
    {
        $new = clone $this;
        $new->CPN1Demande = $CPN1Demande;

        return $new;
    }

    /**
     * @return string
     */
    public function getCPN1Lib()
    {
        return $this->CPN1Lib;
    }

    /**
     * @param string $CPN1Lib
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withCPN1Lib($CPN1Lib)
    {
        $new = clone $this;
        $new->CPN1Lib = $CPN1Lib;

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
     * @return CPAISWSUtilisateurSalarieCompteursConges
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
     * @return CPAISWSUtilisateurSalarieCompteursConges
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
     * @return CPAISWSUtilisateurSalarieCompteursConges
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
    public function getCPNSoldeT0()
    {
        return $this->CPNSoldeT0;
    }

    /**
     * @param float $CPNSoldeT0
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withCPNSoldeT0($CPNSoldeT0)
    {
        $new = clone $this;
        $new->CPNSoldeT0 = $CPNSoldeT0;

        return $new;
    }

    /**
     * @return float
     */
    public function getCPNDemande()
    {
        return $this->CPNDemande;
    }

    /**
     * @param float $CPNDemande
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withCPNDemande($CPNDemande)
    {
        $new = clone $this;
        $new->CPNDemande = $CPNDemande;

        return $new;
    }

    /**
     * @return string
     */
    public function getCPNLib()
    {
        return $this->CPNLib;
    }

    /**
     * @param string $CPNLib
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withCPNLib($CPNLib)
    {
        $new = clone $this;
        $new->CPNLib = $CPNLib;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRTTActif()
    {
        return $this->RTTActif;
    }

    /**
     * @param bool $RTTActif
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withRTTActif($RTTActif)
    {
        $new = clone $this;
        $new->RTTActif = $RTTActif;

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
     * @return CPAISWSUtilisateurSalarieCompteursConges
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
     * @return CPAISWSUtilisateurSalarieCompteursConges
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
     * @return CPAISWSUtilisateurSalarieCompteursConges
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
    public function getRTTSoldeT0()
    {
        return $this->RTTSoldeT0;
    }

    /**
     * @param float $RTTSoldeT0
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withRTTSoldeT0($RTTSoldeT0)
    {
        $new = clone $this;
        $new->RTTSoldeT0 = $RTTSoldeT0;

        return $new;
    }

    /**
     * @return float
     */
    public function getRTTDemande()
    {
        return $this->RTTDemande;
    }

    /**
     * @param float $RTTDemande
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withRTTDemande($RTTDemande)
    {
        $new = clone $this;
        $new->RTTDemande = $RTTDemande;

        return $new;
    }

    /**
     * @return string
     */
    public function getRTTLib()
    {
        return $this->RTTLib;
    }

    /**
     * @param string $RTTLib
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withRTTLib($RTTLib)
    {
        $new = clone $this;
        $new->RTTLib = $RTTLib;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRCRActif()
    {
        return $this->RCRActif;
    }

    /**
     * @param bool $RCRActif
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withRCRActif($RCRActif)
    {
        $new = clone $this;
        $new->RCRActif = $RCRActif;

        return $new;
    }

    /**
     * @return float
     */
    public function getRCRAcquis()
    {
        return $this->RCRAcquis;
    }

    /**
     * @param float $RCRAcquis
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withRCRAcquis($RCRAcquis)
    {
        $new = clone $this;
        $new->RCRAcquis = $RCRAcquis;

        return $new;
    }

    /**
     * @return float
     */
    public function getRCRPris()
    {
        return $this->RCRPris;
    }

    /**
     * @param float $RCRPris
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withRCRPris($RCRPris)
    {
        $new = clone $this;
        $new->RCRPris = $RCRPris;

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
     * @return CPAISWSUtilisateurSalarieCompteursConges
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
    public function getRCRSoldeT0()
    {
        return $this->RCRSoldeT0;
    }

    /**
     * @param float $RCRSoldeT0
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withRCRSoldeT0($RCRSoldeT0)
    {
        $new = clone $this;
        $new->RCRSoldeT0 = $RCRSoldeT0;

        return $new;
    }

    /**
     * @return float
     */
    public function getRCRDemande()
    {
        return $this->RCRDemande;
    }

    /**
     * @param float $RCRDemande
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withRCRDemande($RCRDemande)
    {
        $new = clone $this;
        $new->RCRDemande = $RCRDemande;

        return $new;
    }

    /**
     * @return string
     */
    public function getRCRLib()
    {
        return $this->RCRLib;
    }

    /**
     * @param string $RCRLib
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withRCRLib($RCRLib)
    {
        $new = clone $this;
        $new->RCRLib = $RCRLib;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRCCActif()
    {
        return $this->RCCActif;
    }

    /**
     * @param bool $RCCActif
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withRCCActif($RCCActif)
    {
        $new = clone $this;
        $new->RCCActif = $RCCActif;

        return $new;
    }

    /**
     * @return float
     */
    public function getRCCAcquis()
    {
        return $this->RCCAcquis;
    }

    /**
     * @param float $RCCAcquis
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withRCCAcquis($RCCAcquis)
    {
        $new = clone $this;
        $new->RCCAcquis = $RCCAcquis;

        return $new;
    }

    /**
     * @return float
     */
    public function getRCCPris()
    {
        return $this->RCCPris;
    }

    /**
     * @param float $RCCPris
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withRCCPris($RCCPris)
    {
        $new = clone $this;
        $new->RCCPris = $RCCPris;

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
     * @return CPAISWSUtilisateurSalarieCompteursConges
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
    public function getRCCSoldeT0()
    {
        return $this->RCCSoldeT0;
    }

    /**
     * @param float $RCCSoldeT0
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withRCCSoldeT0($RCCSoldeT0)
    {
        $new = clone $this;
        $new->RCCSoldeT0 = $RCCSoldeT0;

        return $new;
    }

    /**
     * @return float
     */
    public function getRCCDemande()
    {
        return $this->RCCDemande;
    }

    /**
     * @param float $RCCDemande
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withRCCDemande($RCCDemande)
    {
        $new = clone $this;
        $new->RCCDemande = $RCCDemande;

        return $new;
    }

    /**
     * @return string
     */
    public function getRCCLib()
    {
        return $this->RCCLib;
    }

    /**
     * @param string $RCCLib
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withRCCLib($RCCLib)
    {
        $new = clone $this;
        $new->RCCLib = $RCCLib;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRCOActif()
    {
        return $this->RCOActif;
    }

    /**
     * @param bool $RCOActif
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withRCOActif($RCOActif)
    {
        $new = clone $this;
        $new->RCOActif = $RCOActif;

        return $new;
    }

    /**
     * @return float
     */
    public function getRCOAcquis()
    {
        return $this->RCOAcquis;
    }

    /**
     * @param float $RCOAcquis
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withRCOAcquis($RCOAcquis)
    {
        $new = clone $this;
        $new->RCOAcquis = $RCOAcquis;

        return $new;
    }

    /**
     * @return float
     */
    public function getRCOPris()
    {
        return $this->RCOPris;
    }

    /**
     * @param float $RCOPris
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withRCOPris($RCOPris)
    {
        $new = clone $this;
        $new->RCOPris = $RCOPris;

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
     * @return CPAISWSUtilisateurSalarieCompteursConges
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
    public function getRCOSoldeT0()
    {
        return $this->RCOSoldeT0;
    }

    /**
     * @param float $RCOSoldeT0
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withRCOSoldeT0($RCOSoldeT0)
    {
        $new = clone $this;
        $new->RCOSoldeT0 = $RCOSoldeT0;

        return $new;
    }

    /**
     * @return float
     */
    public function getRCODemande()
    {
        return $this->RCODemande;
    }

    /**
     * @param float $RCODemande
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withRCODemande($RCODemande)
    {
        $new = clone $this;
        $new->RCODemande = $RCODemande;

        return $new;
    }

    /**
     * @return string
     */
    public function getRCOLib()
    {
        return $this->RCOLib;
    }

    /**
     * @param string $RCOLib
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withRCOLib($RCOLib)
    {
        $new = clone $this;
        $new->RCOLib = $RCOLib;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRFJActif()
    {
        return $this->RFJActif;
    }

    /**
     * @param bool $RFJActif
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withRFJActif($RFJActif)
    {
        $new = clone $this;
        $new->RFJActif = $RFJActif;

        return $new;
    }

    /**
     * @return float
     */
    public function getRFJAcquis()
    {
        return $this->RFJAcquis;
    }

    /**
     * @param float $RFJAcquis
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withRFJAcquis($RFJAcquis)
    {
        $new = clone $this;
        $new->RFJAcquis = $RFJAcquis;

        return $new;
    }

    /**
     * @return float
     */
    public function getRFJPris()
    {
        return $this->RFJPris;
    }

    /**
     * @param float $RFJPris
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withRFJPris($RFJPris)
    {
        $new = clone $this;
        $new->RFJPris = $RFJPris;

        return $new;
    }

    /**
     * @return float
     */
    public function getRFJSolde()
    {
        return $this->RFJSolde;
    }

    /**
     * @param float $RFJSolde
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withRFJSolde($RFJSolde)
    {
        $new = clone $this;
        $new->RFJSolde = $RFJSolde;

        return $new;
    }

    /**
     * @return float
     */
    public function getRFJSoldeT0()
    {
        return $this->RFJSoldeT0;
    }

    /**
     * @param float $RFJSoldeT0
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withRFJSoldeT0($RFJSoldeT0)
    {
        $new = clone $this;
        $new->RFJSoldeT0 = $RFJSoldeT0;

        return $new;
    }

    /**
     * @return float
     */
    public function getRFJDemande()
    {
        return $this->RFJDemande;
    }

    /**
     * @param float $RFJDemande
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withRFJDemande($RFJDemande)
    {
        $new = clone $this;
        $new->RFJDemande = $RFJDemande;

        return $new;
    }

    /**
     * @return string
     */
    public function getRFJLib()
    {
        return $this->RFJLib;
    }

    /**
     * @param string $RFJLib
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withRFJLib($RFJLib)
    {
        $new = clone $this;
        $new->RFJLib = $RFJLib;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCPSupActif()
    {
        return $this->CPSupActif;
    }

    /**
     * @param bool $CPSupActif
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withCPSupActif($CPSupActif)
    {
        $new = clone $this;
        $new->CPSupActif = $CPSupActif;

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
     * @return CPAISWSUtilisateurSalarieCompteursConges
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
     * @return CPAISWSUtilisateurSalarieCompteursConges
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
     * @return CPAISWSUtilisateurSalarieCompteursConges
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
    public function getCPSupSoldeT0()
    {
        return $this->CPSupSoldeT0;
    }

    /**
     * @param float $CPSupSoldeT0
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withCPSupSoldeT0($CPSupSoldeT0)
    {
        $new = clone $this;
        $new->CPSupSoldeT0 = $CPSupSoldeT0;

        return $new;
    }

    /**
     * @return float
     */
    public function getCPSupDemande()
    {
        return $this->CPSupDemande;
    }

    /**
     * @param float $CPSupDemande
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withCPSupDemande($CPSupDemande)
    {
        $new = clone $this;
        $new->CPSupDemande = $CPSupDemande;

        return $new;
    }

    /**
     * @return string
     */
    public function getCPSupLib()
    {
        return $this->CPSupLib;
    }

    /**
     * @param string $CPSupLib
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withCPSupLib($CPSupLib)
    {
        $new = clone $this;
        $new->CPSupLib = $CPSupLib;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCPSup2Actif()
    {
        return $this->CPSup2Actif;
    }

    /**
     * @param bool $CPSup2Actif
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withCPSup2Actif($CPSup2Actif)
    {
        $new = clone $this;
        $new->CPSup2Actif = $CPSup2Actif;

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
     * @return CPAISWSUtilisateurSalarieCompteursConges
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
     * @return CPAISWSUtilisateurSalarieCompteursConges
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
     * @return CPAISWSUtilisateurSalarieCompteursConges
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
    public function getCPSup2SoldeT0()
    {
        return $this->CPSup2SoldeT0;
    }

    /**
     * @param float $CPSup2SoldeT0
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withCPSup2SoldeT0($CPSup2SoldeT0)
    {
        $new = clone $this;
        $new->CPSup2SoldeT0 = $CPSup2SoldeT0;

        return $new;
    }

    /**
     * @return float
     */
    public function getCPSup2Demande()
    {
        return $this->CPSup2Demande;
    }

    /**
     * @param float $CPSup2Demande
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withCPSup2Demande($CPSup2Demande)
    {
        $new = clone $this;
        $new->CPSup2Demande = $CPSup2Demande;

        return $new;
    }

    /**
     * @return string
     */
    public function getCPSup2Lib()
    {
        return $this->CPSup2Lib;
    }

    /**
     * @param string $CPSup2Lib
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withCPSup2Lib($CPSup2Lib)
    {
        $new = clone $this;
        $new->CPSup2Lib = $CPSup2Lib;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDIFActif()
    {
        return $this->DIFActif;
    }

    /**
     * @param bool $DIFActif
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withDIFActif($DIFActif)
    {
        $new = clone $this;
        $new->DIFActif = $DIFActif;

        return $new;
    }

    /**
     * @return float
     */
    public function getDIFAcquis()
    {
        return $this->DIFAcquis;
    }

    /**
     * @param float $DIFAcquis
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withDIFAcquis($DIFAcquis)
    {
        $new = clone $this;
        $new->DIFAcquis = $DIFAcquis;

        return $new;
    }

    /**
     * @return float
     */
    public function getDIFAcquisFutur()
    {
        return $this->DIFAcquisFutur;
    }

    /**
     * @param float $DIFAcquisFutur
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withDIFAcquisFutur($DIFAcquisFutur)
    {
        $new = clone $this;
        $new->DIFAcquisFutur = $DIFAcquisFutur;

        return $new;
    }

    /**
     * @return float
     */
    public function getDIFPris()
    {
        return $this->DIFPris;
    }

    /**
     * @param float $DIFPris
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withDIFPris($DIFPris)
    {
        $new = clone $this;
        $new->DIFPris = $DIFPris;

        return $new;
    }

    /**
     * @return float
     */
    public function getDIFSolde()
    {
        return $this->DIFSolde;
    }

    /**
     * @param float $DIFSolde
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withDIFSolde($DIFSolde)
    {
        $new = clone $this;
        $new->DIFSolde = $DIFSolde;

        return $new;
    }

    /**
     * @return float
     */
    public function getDIFSoldeT0()
    {
        return $this->DIFSoldeT0;
    }

    /**
     * @param float $DIFSoldeT0
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withDIFSoldeT0($DIFSoldeT0)
    {
        $new = clone $this;
        $new->DIFSoldeT0 = $DIFSoldeT0;

        return $new;
    }

    /**
     * @return float
     */
    public function getDIFDemande()
    {
        return $this->DIFDemande;
    }

    /**
     * @param float $DIFDemande
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withDIFDemande($DIFDemande)
    {
        $new = clone $this;
        $new->DIFDemande = $DIFDemande;

        return $new;
    }

    /**
     * @return string
     */
    public function getDIFLib()
    {
        return $this->DIFLib;
    }

    /**
     * @param string $DIFLib
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withDIFLib($DIFLib)
    {
        $new = clone $this;
        $new->DIFLib = $DIFLib;

        return $new;
    }

    /**
     * @return string
     */
    public function getErrMsg()
    {
        return $this->ErrMsg;
    }

    /**
     * @param string $ErrMsg
     * @return CPAISWSUtilisateurSalarieCompteursConges
     */
    public function withErrMsg($ErrMsg)
    {
        $new = clone $this;
        $new->ErrMsg = $ErrMsg;

        return $new;
    }
}

