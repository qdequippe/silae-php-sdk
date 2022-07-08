<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSocieteInfoSup
{
    /**
     * @var bool
     */
    private $bCLI_AffilieCCP;

    /**
     * @var bool
     */
    private $CLI_AffilieCCP;

    /**
     * @var bool
     */
    private $bCLI_BaseCalculAnciennete;

    /**
     * @var int
     */
    private $CLI_BaseCalculAnciennete;

    /**
     * @var bool
     */
    private $bCLI_CalcAutoESInactif;

    /**
     * @var bool
     */
    private $CLI_CalcAutoESInactif;

    /**
     * @var bool
     */
    private $bCLI_CalcAutoIJSSInactif;

    /**
     * @var bool
     */
    private $CLI_CalcAutoIJSSInactif;

    /**
     * @var bool
     */
    private $bCLI_CalcAutoMaintienInactif;

    /**
     * @var bool
     */
    private $CLI_CalcAutoMaintienInactif;

    /**
     * @var bool
     */
    private $bCLI_CalcAutoRegulInactif;

    /**
     * @var bool
     */
    private $CLI_CalcAutoRegulInactif;

    /**
     * @var bool
     */
    private $bCLI_ChaineFabricationDateLimiteAbsences;

    /**
     * @var string
     */
    private $CLI_ChaineFabricationDateLimiteAbsences;

    /**
     * @var bool
     */
    private $bCLI_ConfSalActive;

    /**
     * @var bool
     */
    private $CLI_ConfSalActive;

    /**
     * @var bool
     */
    private $bCLI_DFPTepa;

    /**
     * @var bool
     */
    private $CLI_DFPTepa;

    /**
     * @var bool
     */
    private $bCLI_DFPTepaDebut;

    /**
     * @var \DateTimeInterface
     */
    private $CLI_DFPTepaDebut;

    /**
     * @var bool
     */
    private $bCLI_DtDebChangePaieDecalee;

    /**
     * @var \DateTimeInterface
     */
    private $CLI_DtDebChangePaieDecalee;

    /**
     * @var bool
     */
    private $bCLI_DtDebExerciceComptable;

    /**
     * @var \DateTimeInterface
     */
    private $CLI_DtDebExerciceComptable;

    /**
     * @var bool
     */
    private $bCLI_DtFinExerciceComptable;

    /**
     * @var \DateTimeInterface
     */
    private $CLI_DtFinExerciceComptable;

    /**
     * @var bool
     */
    private $bCLI_EmployeurCivilite;

    /**
     * @var int
     */
    private $CLI_EmployeurCivilite;

    /**
     * @var bool
     */
    private $bCLI_EmployeurNom;

    /**
     * @var string
     */
    private $CLI_EmployeurNom;

    /**
     * @var bool
     */
    private $bCLI_EmployeurPrenom;

    /**
     * @var string
     */
    private $CLI_EmployeurPrenom;

    /**
     * @var bool
     */
    private $bCLI_EmployeurQualite;

    /**
     * @var int
     */
    private $CLI_EmployeurQualite;

    /**
     * @var bool
     */
    private $bCLI_EmployeurQualiteAutre;

    /**
     * @var string
     */
    private $CLI_EmployeurQualiteAutre;

    /**
     * @var bool
     */
    private $bCLI_EtatDossierPaie;

    /**
     * @var int
     */
    private $CLI_EtatDossierPaie;

    /**
     * @var bool
     */
    private $bCLI_FormaProfTranche;

    /**
     * @var int
     */
    private $CLI_FormaProfTranche;

    /**
     * @var bool
     */
    private $bCLI_FormaProfTrancheAnnee;

    /**
     * @var \DateTimeInterface
     */
    private $CLI_FormaProfTrancheAnnee;

    /**
     * @var bool
     */
    private $bCLI_FormaProfTrancheAnnee2;

    /**
     * @var \DateTimeInterface
     */
    private $CLI_FormaProfTrancheAnnee2;

    /**
     * @var bool
     */
    private $bCLI_FormaProfTrancheAnnee3;

    /**
     * @var \DateTimeInterface
     */
    private $CLI_FormaProfTrancheAnnee3;

    /**
     * @var bool
     */
    private $bCLI_FormaProfTrancheAnnee4;

    /**
     * @var \DateTimeInterface
     */
    private $CLI_FormaProfTrancheAnnee4;

    /**
     * @var bool
     */
    private $bCLI_GestionCPExclEnJours;

    /**
     * @var bool
     */
    private $CLI_GestionCPExclEnJours;

    /**
     * @var bool
     */
    private $bCLI_JourVersementSalaires;

    /**
     * @var int
     */
    private $CLI_JourVersementSalaires;

    /**
     * @var bool
     */
    private $bCLI_ListesTriSalaries;

    /**
     * @var int
     */
    private $CLI_ListesTriSalaries;

    /**
     * @var bool
     */
    private $bCLI_MatriculeAuto;

    /**
     * @var bool
     */
    private $CLI_MatriculeAuto;

    /**
     * @var bool
     */
    private $bCLI_MatriculeLongueur;

    /**
     * @var int
     */
    private $CLI_MatriculeLongueur;

    /**
     * @var bool
     */
    private $bCLI_MethodeArbitrage;

    /**
     * @var int
     */
    private $CLI_MethodeArbitrage;

    /**
     * @var bool
     */
    private $bCLI_MethodeCalculMaintien;

    /**
     * @var int
     */
    private $CLI_MethodeCalculMaintien;

    /**
     * @var bool
     */
    private $bCLI_MethodeCalculMaintienNbM;

    /**
     * @var int
     */
    private $CLI_MethodeCalculMaintienNbM;

    /**
     * @var bool
     */
    private $bCLI_MethodeRetenueCP;

    /**
     * @var int
     */
    private $CLI_MethodeRetenueCP;

    /**
     * @var bool
     */
    private $bCLI_MethodesSuiviAbsencesDansEta;

    /**
     * @var bool
     */
    private $CLI_MethodesSuiviAbsencesDansEta;

    /**
     * @var bool
     */
    private $bCLI_MethodeSuiviAbsences;

    /**
     * @var int
     */
    private $CLI_MethodeSuiviAbsences;

    /**
     * @var bool
     */
    private $bCLI_MethodeSuiviAbsencesDeductionHM;

    /**
     * @var int
     */
    private $CLI_MethodeSuiviAbsencesDeductionHM;

    /**
     * @var bool
     */
    private $bCLI_MethodeSuiviAbsencesJC;

    /**
     * @var int
     */
    private $CLI_MethodeSuiviAbsencesJC;

    /**
     * @var bool
     */
    private $bCLI_MethodeSuiviCP;

    /**
     * @var int
     */
    private $CLI_MethodeSuiviCP;

    /**
     * @var bool
     */
    private $bCLI_MethodeSuiviCPAcqMois;

    /**
     * @var float
     */
    private $CLI_MethodeSuiviCPAcqMois;

    /**
     * @var bool
     */
    private $bCLI_ModuleCTCDActif;

    /**
     * @var bool
     */
    private $CLI_ModuleCTCDActif;

    /**
     * @var bool
     */
    private $bCLI_MontagePaiePeriodeDebut;

    /**
     * @var \DateTimeInterface
     */
    private $CLI_MontagePaiePeriodeDebut;

    /**
     * @var bool
     */
    private $bCLI_PaieDecalee;

    /**
     * @var bool
     */
    private $CLI_PaieDecalee;

    /**
     * @var bool
     */
    private $bCLI_PersonneAContacterMel;

    /**
     * @var string
     */
    private $CLI_PersonneAContacterMel;

    /**
     * @var bool
     */
    private $bCLI_PersonneAContacterNom;

    /**
     * @var string
     */
    private $CLI_PersonneAContacterNom;

    /**
     * @var bool
     */
    private $bCLI_PersonneAContacterPrenom;

    /**
     * @var string
     */
    private $CLI_PersonneAContacterPrenom;

    /**
     * @var bool
     */
    private $bCLI_PersonneAContacterTel;

    /**
     * @var string
     */
    private $CLI_PersonneAContacterTel;

    /**
     * @var bool
     */
    private $bCLI_ReductionFillon19;

    /**
     * @var bool
     */
    private $CLI_ReductionFillon19;

    /**
     * @var bool
     */
    private $bCLI_ReductionFillon19Debut;

    /**
     * @var \DateTimeInterface
     */
    private $CLI_ReductionFillon19Debut;

    /**
     * @var bool
     */
    private $bCLI_SepaModeComptabilisation;

    /**
     * @var int
     */
    private $CLI_SepaModeComptabilisation;

    /**
     * @var bool
     */
    private $bCLI_SortieAppliJourVersementSalaires;

    /**
     * @var bool
     */
    private $CLI_SortieAppliJourVersementSalaires;

    /**
     * @var bool
     */
    private $bCLI_SortieAppliModeReglementNormal;

    /**
     * @var bool
     */
    private $CLI_SortieAppliModeReglementNormal;

    /**
     * @var bool
     */
    private $bCLI_SousMethodeSuiviAbsences;

    /**
     * @var int
     */
    private $CLI_SousMethodeSuiviAbsences;

    /**
     * @var bool
     */
    private $bCLI_SousMethodeSuiviAbsencesFJ;

    /**
     * @var int
     */
    private $CLI_SousMethodeSuiviAbsencesFJ;

    /**
     * @var bool
     */
    private $bCLI_Subrogation;

    /**
     * @var bool
     */
    private $CLI_Subrogation;

    /**
     * @var bool
     */
    private $bCLI_SubrogationVersEtaPrincipal;

    /**
     * @var bool
     */
    private $CLI_SubrogationVersEtaPrincipal;

    /**
     * @var bool
     */
    private $bCLI_TassageAbsencesJours;

    /**
     * @var int
     */
    private $CLI_TassageAbsencesJours;

    /**
     * @var bool
     */
    private $bCLI_TaxeApprentissagePayeeCCP;

    /**
     * @var bool
     */
    private $CLI_TaxeApprentissagePayeeCCP;

    /**
     * @var bool
     */
    private $bCLI_TaxeCotPPrev;

    /**
     * @var bool
     */
    private $CLI_TaxeCotPPrev;

    /**
     * @return bool
     */
    public function getBCLI_AffilieCCP()
    {
        return $this->bCLI_AffilieCCP;
    }

    /**
     * @param bool $bCLI_AffilieCCP
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_AffilieCCP($bCLI_AffilieCCP)
    {
        $new = clone $this;
        $new->bCLI_AffilieCCP = $bCLI_AffilieCCP;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCLI_AffilieCCP()
    {
        return $this->CLI_AffilieCCP;
    }

    /**
     * @param bool $CLI_AffilieCCP
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_AffilieCCP($CLI_AffilieCCP)
    {
        $new = clone $this;
        $new->CLI_AffilieCCP = $CLI_AffilieCCP;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_BaseCalculAnciennete()
    {
        return $this->bCLI_BaseCalculAnciennete;
    }

    /**
     * @param bool $bCLI_BaseCalculAnciennete
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_BaseCalculAnciennete($bCLI_BaseCalculAnciennete)
    {
        $new = clone $this;
        $new->bCLI_BaseCalculAnciennete = $bCLI_BaseCalculAnciennete;

        return $new;
    }

    /**
     * @return int
     */
    public function getCLI_BaseCalculAnciennete()
    {
        return $this->CLI_BaseCalculAnciennete;
    }

    /**
     * @param int $CLI_BaseCalculAnciennete
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_BaseCalculAnciennete($CLI_BaseCalculAnciennete)
    {
        $new = clone $this;
        $new->CLI_BaseCalculAnciennete = $CLI_BaseCalculAnciennete;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_CalcAutoESInactif()
    {
        return $this->bCLI_CalcAutoESInactif;
    }

    /**
     * @param bool $bCLI_CalcAutoESInactif
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_CalcAutoESInactif($bCLI_CalcAutoESInactif)
    {
        $new = clone $this;
        $new->bCLI_CalcAutoESInactif = $bCLI_CalcAutoESInactif;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCLI_CalcAutoESInactif()
    {
        return $this->CLI_CalcAutoESInactif;
    }

    /**
     * @param bool $CLI_CalcAutoESInactif
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_CalcAutoESInactif($CLI_CalcAutoESInactif)
    {
        $new = clone $this;
        $new->CLI_CalcAutoESInactif = $CLI_CalcAutoESInactif;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_CalcAutoIJSSInactif()
    {
        return $this->bCLI_CalcAutoIJSSInactif;
    }

    /**
     * @param bool $bCLI_CalcAutoIJSSInactif
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_CalcAutoIJSSInactif($bCLI_CalcAutoIJSSInactif)
    {
        $new = clone $this;
        $new->bCLI_CalcAutoIJSSInactif = $bCLI_CalcAutoIJSSInactif;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCLI_CalcAutoIJSSInactif()
    {
        return $this->CLI_CalcAutoIJSSInactif;
    }

    /**
     * @param bool $CLI_CalcAutoIJSSInactif
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_CalcAutoIJSSInactif($CLI_CalcAutoIJSSInactif)
    {
        $new = clone $this;
        $new->CLI_CalcAutoIJSSInactif = $CLI_CalcAutoIJSSInactif;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_CalcAutoMaintienInactif()
    {
        return $this->bCLI_CalcAutoMaintienInactif;
    }

    /**
     * @param bool $bCLI_CalcAutoMaintienInactif
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_CalcAutoMaintienInactif($bCLI_CalcAutoMaintienInactif)
    {
        $new = clone $this;
        $new->bCLI_CalcAutoMaintienInactif = $bCLI_CalcAutoMaintienInactif;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCLI_CalcAutoMaintienInactif()
    {
        return $this->CLI_CalcAutoMaintienInactif;
    }

    /**
     * @param bool $CLI_CalcAutoMaintienInactif
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_CalcAutoMaintienInactif($CLI_CalcAutoMaintienInactif)
    {
        $new = clone $this;
        $new->CLI_CalcAutoMaintienInactif = $CLI_CalcAutoMaintienInactif;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_CalcAutoRegulInactif()
    {
        return $this->bCLI_CalcAutoRegulInactif;
    }

    /**
     * @param bool $bCLI_CalcAutoRegulInactif
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_CalcAutoRegulInactif($bCLI_CalcAutoRegulInactif)
    {
        $new = clone $this;
        $new->bCLI_CalcAutoRegulInactif = $bCLI_CalcAutoRegulInactif;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCLI_CalcAutoRegulInactif()
    {
        return $this->CLI_CalcAutoRegulInactif;
    }

    /**
     * @param bool $CLI_CalcAutoRegulInactif
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_CalcAutoRegulInactif($CLI_CalcAutoRegulInactif)
    {
        $new = clone $this;
        $new->CLI_CalcAutoRegulInactif = $CLI_CalcAutoRegulInactif;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_ChaineFabricationDateLimiteAbsences()
    {
        return $this->bCLI_ChaineFabricationDateLimiteAbsences;
    }

    /**
     * @param bool $bCLI_ChaineFabricationDateLimiteAbsences
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_ChaineFabricationDateLimiteAbsences($bCLI_ChaineFabricationDateLimiteAbsences)
    {
        $new = clone $this;
        $new->bCLI_ChaineFabricationDateLimiteAbsences = $bCLI_ChaineFabricationDateLimiteAbsences;

        return $new;
    }

    /**
     * @return string
     */
    public function getCLI_ChaineFabricationDateLimiteAbsences()
    {
        return $this->CLI_ChaineFabricationDateLimiteAbsences;
    }

    /**
     * @param string $CLI_ChaineFabricationDateLimiteAbsences
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_ChaineFabricationDateLimiteAbsences($CLI_ChaineFabricationDateLimiteAbsences)
    {
        $new = clone $this;
        $new->CLI_ChaineFabricationDateLimiteAbsences = $CLI_ChaineFabricationDateLimiteAbsences;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_ConfSalActive()
    {
        return $this->bCLI_ConfSalActive;
    }

    /**
     * @param bool $bCLI_ConfSalActive
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_ConfSalActive($bCLI_ConfSalActive)
    {
        $new = clone $this;
        $new->bCLI_ConfSalActive = $bCLI_ConfSalActive;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCLI_ConfSalActive()
    {
        return $this->CLI_ConfSalActive;
    }

    /**
     * @param bool $CLI_ConfSalActive
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_ConfSalActive($CLI_ConfSalActive)
    {
        $new = clone $this;
        $new->CLI_ConfSalActive = $CLI_ConfSalActive;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_DFPTepa()
    {
        return $this->bCLI_DFPTepa;
    }

    /**
     * @param bool $bCLI_DFPTepa
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_DFPTepa($bCLI_DFPTepa)
    {
        $new = clone $this;
        $new->bCLI_DFPTepa = $bCLI_DFPTepa;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCLI_DFPTepa()
    {
        return $this->CLI_DFPTepa;
    }

    /**
     * @param bool $CLI_DFPTepa
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_DFPTepa($CLI_DFPTepa)
    {
        $new = clone $this;
        $new->CLI_DFPTepa = $CLI_DFPTepa;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_DFPTepaDebut()
    {
        return $this->bCLI_DFPTepaDebut;
    }

    /**
     * @param bool $bCLI_DFPTepaDebut
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_DFPTepaDebut($bCLI_DFPTepaDebut)
    {
        $new = clone $this;
        $new->bCLI_DFPTepaDebut = $bCLI_DFPTepaDebut;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCLI_DFPTepaDebut()
    {
        return $this->CLI_DFPTepaDebut;
    }

    /**
     * @param \DateTimeInterface $CLI_DFPTepaDebut
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_DFPTepaDebut($CLI_DFPTepaDebut)
    {
        $new = clone $this;
        $new->CLI_DFPTepaDebut = $CLI_DFPTepaDebut;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_DtDebChangePaieDecalee()
    {
        return $this->bCLI_DtDebChangePaieDecalee;
    }

    /**
     * @param bool $bCLI_DtDebChangePaieDecalee
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_DtDebChangePaieDecalee($bCLI_DtDebChangePaieDecalee)
    {
        $new = clone $this;
        $new->bCLI_DtDebChangePaieDecalee = $bCLI_DtDebChangePaieDecalee;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCLI_DtDebChangePaieDecalee()
    {
        return $this->CLI_DtDebChangePaieDecalee;
    }

    /**
     * @param \DateTimeInterface $CLI_DtDebChangePaieDecalee
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_DtDebChangePaieDecalee($CLI_DtDebChangePaieDecalee)
    {
        $new = clone $this;
        $new->CLI_DtDebChangePaieDecalee = $CLI_DtDebChangePaieDecalee;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_DtDebExerciceComptable()
    {
        return $this->bCLI_DtDebExerciceComptable;
    }

    /**
     * @param bool $bCLI_DtDebExerciceComptable
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_DtDebExerciceComptable($bCLI_DtDebExerciceComptable)
    {
        $new = clone $this;
        $new->bCLI_DtDebExerciceComptable = $bCLI_DtDebExerciceComptable;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCLI_DtDebExerciceComptable()
    {
        return $this->CLI_DtDebExerciceComptable;
    }

    /**
     * @param \DateTimeInterface $CLI_DtDebExerciceComptable
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_DtDebExerciceComptable($CLI_DtDebExerciceComptable)
    {
        $new = clone $this;
        $new->CLI_DtDebExerciceComptable = $CLI_DtDebExerciceComptable;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_DtFinExerciceComptable()
    {
        return $this->bCLI_DtFinExerciceComptable;
    }

    /**
     * @param bool $bCLI_DtFinExerciceComptable
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_DtFinExerciceComptable($bCLI_DtFinExerciceComptable)
    {
        $new = clone $this;
        $new->bCLI_DtFinExerciceComptable = $bCLI_DtFinExerciceComptable;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCLI_DtFinExerciceComptable()
    {
        return $this->CLI_DtFinExerciceComptable;
    }

    /**
     * @param \DateTimeInterface $CLI_DtFinExerciceComptable
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_DtFinExerciceComptable($CLI_DtFinExerciceComptable)
    {
        $new = clone $this;
        $new->CLI_DtFinExerciceComptable = $CLI_DtFinExerciceComptable;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_EmployeurCivilite()
    {
        return $this->bCLI_EmployeurCivilite;
    }

    /**
     * @param bool $bCLI_EmployeurCivilite
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_EmployeurCivilite($bCLI_EmployeurCivilite)
    {
        $new = clone $this;
        $new->bCLI_EmployeurCivilite = $bCLI_EmployeurCivilite;

        return $new;
    }

    /**
     * @return int
     */
    public function getCLI_EmployeurCivilite()
    {
        return $this->CLI_EmployeurCivilite;
    }

    /**
     * @param int $CLI_EmployeurCivilite
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_EmployeurCivilite($CLI_EmployeurCivilite)
    {
        $new = clone $this;
        $new->CLI_EmployeurCivilite = $CLI_EmployeurCivilite;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_EmployeurNom()
    {
        return $this->bCLI_EmployeurNom;
    }

    /**
     * @param bool $bCLI_EmployeurNom
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_EmployeurNom($bCLI_EmployeurNom)
    {
        $new = clone $this;
        $new->bCLI_EmployeurNom = $bCLI_EmployeurNom;

        return $new;
    }

    /**
     * @return string
     */
    public function getCLI_EmployeurNom()
    {
        return $this->CLI_EmployeurNom;
    }

    /**
     * @param string $CLI_EmployeurNom
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_EmployeurNom($CLI_EmployeurNom)
    {
        $new = clone $this;
        $new->CLI_EmployeurNom = $CLI_EmployeurNom;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_EmployeurPrenom()
    {
        return $this->bCLI_EmployeurPrenom;
    }

    /**
     * @param bool $bCLI_EmployeurPrenom
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_EmployeurPrenom($bCLI_EmployeurPrenom)
    {
        $new = clone $this;
        $new->bCLI_EmployeurPrenom = $bCLI_EmployeurPrenom;

        return $new;
    }

    /**
     * @return string
     */
    public function getCLI_EmployeurPrenom()
    {
        return $this->CLI_EmployeurPrenom;
    }

    /**
     * @param string $CLI_EmployeurPrenom
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_EmployeurPrenom($CLI_EmployeurPrenom)
    {
        $new = clone $this;
        $new->CLI_EmployeurPrenom = $CLI_EmployeurPrenom;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_EmployeurQualite()
    {
        return $this->bCLI_EmployeurQualite;
    }

    /**
     * @param bool $bCLI_EmployeurQualite
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_EmployeurQualite($bCLI_EmployeurQualite)
    {
        $new = clone $this;
        $new->bCLI_EmployeurQualite = $bCLI_EmployeurQualite;

        return $new;
    }

    /**
     * @return int
     */
    public function getCLI_EmployeurQualite()
    {
        return $this->CLI_EmployeurQualite;
    }

    /**
     * @param int $CLI_EmployeurQualite
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_EmployeurQualite($CLI_EmployeurQualite)
    {
        $new = clone $this;
        $new->CLI_EmployeurQualite = $CLI_EmployeurQualite;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_EmployeurQualiteAutre()
    {
        return $this->bCLI_EmployeurQualiteAutre;
    }

    /**
     * @param bool $bCLI_EmployeurQualiteAutre
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_EmployeurQualiteAutre($bCLI_EmployeurQualiteAutre)
    {
        $new = clone $this;
        $new->bCLI_EmployeurQualiteAutre = $bCLI_EmployeurQualiteAutre;

        return $new;
    }

    /**
     * @return string
     */
    public function getCLI_EmployeurQualiteAutre()
    {
        return $this->CLI_EmployeurQualiteAutre;
    }

    /**
     * @param string $CLI_EmployeurQualiteAutre
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_EmployeurQualiteAutre($CLI_EmployeurQualiteAutre)
    {
        $new = clone $this;
        $new->CLI_EmployeurQualiteAutre = $CLI_EmployeurQualiteAutre;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_EtatDossierPaie()
    {
        return $this->bCLI_EtatDossierPaie;
    }

    /**
     * @param bool $bCLI_EtatDossierPaie
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_EtatDossierPaie($bCLI_EtatDossierPaie)
    {
        $new = clone $this;
        $new->bCLI_EtatDossierPaie = $bCLI_EtatDossierPaie;

        return $new;
    }

    /**
     * @return int
     */
    public function getCLI_EtatDossierPaie()
    {
        return $this->CLI_EtatDossierPaie;
    }

    /**
     * @param int $CLI_EtatDossierPaie
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_EtatDossierPaie($CLI_EtatDossierPaie)
    {
        $new = clone $this;
        $new->CLI_EtatDossierPaie = $CLI_EtatDossierPaie;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_FormaProfTranche()
    {
        return $this->bCLI_FormaProfTranche;
    }

    /**
     * @param bool $bCLI_FormaProfTranche
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_FormaProfTranche($bCLI_FormaProfTranche)
    {
        $new = clone $this;
        $new->bCLI_FormaProfTranche = $bCLI_FormaProfTranche;

        return $new;
    }

    /**
     * @return int
     */
    public function getCLI_FormaProfTranche()
    {
        return $this->CLI_FormaProfTranche;
    }

    /**
     * @param int $CLI_FormaProfTranche
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_FormaProfTranche($CLI_FormaProfTranche)
    {
        $new = clone $this;
        $new->CLI_FormaProfTranche = $CLI_FormaProfTranche;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_FormaProfTrancheAnnee()
    {
        return $this->bCLI_FormaProfTrancheAnnee;
    }

    /**
     * @param bool $bCLI_FormaProfTrancheAnnee
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_FormaProfTrancheAnnee($bCLI_FormaProfTrancheAnnee)
    {
        $new = clone $this;
        $new->bCLI_FormaProfTrancheAnnee = $bCLI_FormaProfTrancheAnnee;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCLI_FormaProfTrancheAnnee()
    {
        return $this->CLI_FormaProfTrancheAnnee;
    }

    /**
     * @param \DateTimeInterface $CLI_FormaProfTrancheAnnee
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_FormaProfTrancheAnnee($CLI_FormaProfTrancheAnnee)
    {
        $new = clone $this;
        $new->CLI_FormaProfTrancheAnnee = $CLI_FormaProfTrancheAnnee;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_FormaProfTrancheAnnee2()
    {
        return $this->bCLI_FormaProfTrancheAnnee2;
    }

    /**
     * @param bool $bCLI_FormaProfTrancheAnnee2
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_FormaProfTrancheAnnee2($bCLI_FormaProfTrancheAnnee2)
    {
        $new = clone $this;
        $new->bCLI_FormaProfTrancheAnnee2 = $bCLI_FormaProfTrancheAnnee2;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCLI_FormaProfTrancheAnnee2()
    {
        return $this->CLI_FormaProfTrancheAnnee2;
    }

    /**
     * @param \DateTimeInterface $CLI_FormaProfTrancheAnnee2
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_FormaProfTrancheAnnee2($CLI_FormaProfTrancheAnnee2)
    {
        $new = clone $this;
        $new->CLI_FormaProfTrancheAnnee2 = $CLI_FormaProfTrancheAnnee2;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_FormaProfTrancheAnnee3()
    {
        return $this->bCLI_FormaProfTrancheAnnee3;
    }

    /**
     * @param bool $bCLI_FormaProfTrancheAnnee3
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_FormaProfTrancheAnnee3($bCLI_FormaProfTrancheAnnee3)
    {
        $new = clone $this;
        $new->bCLI_FormaProfTrancheAnnee3 = $bCLI_FormaProfTrancheAnnee3;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCLI_FormaProfTrancheAnnee3()
    {
        return $this->CLI_FormaProfTrancheAnnee3;
    }

    /**
     * @param \DateTimeInterface $CLI_FormaProfTrancheAnnee3
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_FormaProfTrancheAnnee3($CLI_FormaProfTrancheAnnee3)
    {
        $new = clone $this;
        $new->CLI_FormaProfTrancheAnnee3 = $CLI_FormaProfTrancheAnnee3;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_FormaProfTrancheAnnee4()
    {
        return $this->bCLI_FormaProfTrancheAnnee4;
    }

    /**
     * @param bool $bCLI_FormaProfTrancheAnnee4
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_FormaProfTrancheAnnee4($bCLI_FormaProfTrancheAnnee4)
    {
        $new = clone $this;
        $new->bCLI_FormaProfTrancheAnnee4 = $bCLI_FormaProfTrancheAnnee4;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCLI_FormaProfTrancheAnnee4()
    {
        return $this->CLI_FormaProfTrancheAnnee4;
    }

    /**
     * @param \DateTimeInterface $CLI_FormaProfTrancheAnnee4
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_FormaProfTrancheAnnee4($CLI_FormaProfTrancheAnnee4)
    {
        $new = clone $this;
        $new->CLI_FormaProfTrancheAnnee4 = $CLI_FormaProfTrancheAnnee4;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_GestionCPExclEnJours()
    {
        return $this->bCLI_GestionCPExclEnJours;
    }

    /**
     * @param bool $bCLI_GestionCPExclEnJours
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_GestionCPExclEnJours($bCLI_GestionCPExclEnJours)
    {
        $new = clone $this;
        $new->bCLI_GestionCPExclEnJours = $bCLI_GestionCPExclEnJours;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCLI_GestionCPExclEnJours()
    {
        return $this->CLI_GestionCPExclEnJours;
    }

    /**
     * @param bool $CLI_GestionCPExclEnJours
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_GestionCPExclEnJours($CLI_GestionCPExclEnJours)
    {
        $new = clone $this;
        $new->CLI_GestionCPExclEnJours = $CLI_GestionCPExclEnJours;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_JourVersementSalaires()
    {
        return $this->bCLI_JourVersementSalaires;
    }

    /**
     * @param bool $bCLI_JourVersementSalaires
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_JourVersementSalaires($bCLI_JourVersementSalaires)
    {
        $new = clone $this;
        $new->bCLI_JourVersementSalaires = $bCLI_JourVersementSalaires;

        return $new;
    }

    /**
     * @return int
     */
    public function getCLI_JourVersementSalaires()
    {
        return $this->CLI_JourVersementSalaires;
    }

    /**
     * @param int $CLI_JourVersementSalaires
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_JourVersementSalaires($CLI_JourVersementSalaires)
    {
        $new = clone $this;
        $new->CLI_JourVersementSalaires = $CLI_JourVersementSalaires;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_ListesTriSalaries()
    {
        return $this->bCLI_ListesTriSalaries;
    }

    /**
     * @param bool $bCLI_ListesTriSalaries
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_ListesTriSalaries($bCLI_ListesTriSalaries)
    {
        $new = clone $this;
        $new->bCLI_ListesTriSalaries = $bCLI_ListesTriSalaries;

        return $new;
    }

    /**
     * @return int
     */
    public function getCLI_ListesTriSalaries()
    {
        return $this->CLI_ListesTriSalaries;
    }

    /**
     * @param int $CLI_ListesTriSalaries
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_ListesTriSalaries($CLI_ListesTriSalaries)
    {
        $new = clone $this;
        $new->CLI_ListesTriSalaries = $CLI_ListesTriSalaries;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_MatriculeAuto()
    {
        return $this->bCLI_MatriculeAuto;
    }

    /**
     * @param bool $bCLI_MatriculeAuto
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_MatriculeAuto($bCLI_MatriculeAuto)
    {
        $new = clone $this;
        $new->bCLI_MatriculeAuto = $bCLI_MatriculeAuto;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCLI_MatriculeAuto()
    {
        return $this->CLI_MatriculeAuto;
    }

    /**
     * @param bool $CLI_MatriculeAuto
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_MatriculeAuto($CLI_MatriculeAuto)
    {
        $new = clone $this;
        $new->CLI_MatriculeAuto = $CLI_MatriculeAuto;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_MatriculeLongueur()
    {
        return $this->bCLI_MatriculeLongueur;
    }

    /**
     * @param bool $bCLI_MatriculeLongueur
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_MatriculeLongueur($bCLI_MatriculeLongueur)
    {
        $new = clone $this;
        $new->bCLI_MatriculeLongueur = $bCLI_MatriculeLongueur;

        return $new;
    }

    /**
     * @return int
     */
    public function getCLI_MatriculeLongueur()
    {
        return $this->CLI_MatriculeLongueur;
    }

    /**
     * @param int $CLI_MatriculeLongueur
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_MatriculeLongueur($CLI_MatriculeLongueur)
    {
        $new = clone $this;
        $new->CLI_MatriculeLongueur = $CLI_MatriculeLongueur;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_MethodeArbitrage()
    {
        return $this->bCLI_MethodeArbitrage;
    }

    /**
     * @param bool $bCLI_MethodeArbitrage
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_MethodeArbitrage($bCLI_MethodeArbitrage)
    {
        $new = clone $this;
        $new->bCLI_MethodeArbitrage = $bCLI_MethodeArbitrage;

        return $new;
    }

    /**
     * @return int
     */
    public function getCLI_MethodeArbitrage()
    {
        return $this->CLI_MethodeArbitrage;
    }

    /**
     * @param int $CLI_MethodeArbitrage
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_MethodeArbitrage($CLI_MethodeArbitrage)
    {
        $new = clone $this;
        $new->CLI_MethodeArbitrage = $CLI_MethodeArbitrage;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_MethodeCalculMaintien()
    {
        return $this->bCLI_MethodeCalculMaintien;
    }

    /**
     * @param bool $bCLI_MethodeCalculMaintien
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_MethodeCalculMaintien($bCLI_MethodeCalculMaintien)
    {
        $new = clone $this;
        $new->bCLI_MethodeCalculMaintien = $bCLI_MethodeCalculMaintien;

        return $new;
    }

    /**
     * @return int
     */
    public function getCLI_MethodeCalculMaintien()
    {
        return $this->CLI_MethodeCalculMaintien;
    }

    /**
     * @param int $CLI_MethodeCalculMaintien
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_MethodeCalculMaintien($CLI_MethodeCalculMaintien)
    {
        $new = clone $this;
        $new->CLI_MethodeCalculMaintien = $CLI_MethodeCalculMaintien;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_MethodeCalculMaintienNbM()
    {
        return $this->bCLI_MethodeCalculMaintienNbM;
    }

    /**
     * @param bool $bCLI_MethodeCalculMaintienNbM
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_MethodeCalculMaintienNbM($bCLI_MethodeCalculMaintienNbM)
    {
        $new = clone $this;
        $new->bCLI_MethodeCalculMaintienNbM = $bCLI_MethodeCalculMaintienNbM;

        return $new;
    }

    /**
     * @return int
     */
    public function getCLI_MethodeCalculMaintienNbM()
    {
        return $this->CLI_MethodeCalculMaintienNbM;
    }

    /**
     * @param int $CLI_MethodeCalculMaintienNbM
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_MethodeCalculMaintienNbM($CLI_MethodeCalculMaintienNbM)
    {
        $new = clone $this;
        $new->CLI_MethodeCalculMaintienNbM = $CLI_MethodeCalculMaintienNbM;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_MethodeRetenueCP()
    {
        return $this->bCLI_MethodeRetenueCP;
    }

    /**
     * @param bool $bCLI_MethodeRetenueCP
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_MethodeRetenueCP($bCLI_MethodeRetenueCP)
    {
        $new = clone $this;
        $new->bCLI_MethodeRetenueCP = $bCLI_MethodeRetenueCP;

        return $new;
    }

    /**
     * @return int
     */
    public function getCLI_MethodeRetenueCP()
    {
        return $this->CLI_MethodeRetenueCP;
    }

    /**
     * @param int $CLI_MethodeRetenueCP
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_MethodeRetenueCP($CLI_MethodeRetenueCP)
    {
        $new = clone $this;
        $new->CLI_MethodeRetenueCP = $CLI_MethodeRetenueCP;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_MethodesSuiviAbsencesDansEta()
    {
        return $this->bCLI_MethodesSuiviAbsencesDansEta;
    }

    /**
     * @param bool $bCLI_MethodesSuiviAbsencesDansEta
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_MethodesSuiviAbsencesDansEta($bCLI_MethodesSuiviAbsencesDansEta)
    {
        $new = clone $this;
        $new->bCLI_MethodesSuiviAbsencesDansEta = $bCLI_MethodesSuiviAbsencesDansEta;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCLI_MethodesSuiviAbsencesDansEta()
    {
        return $this->CLI_MethodesSuiviAbsencesDansEta;
    }

    /**
     * @param bool $CLI_MethodesSuiviAbsencesDansEta
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_MethodesSuiviAbsencesDansEta($CLI_MethodesSuiviAbsencesDansEta)
    {
        $new = clone $this;
        $new->CLI_MethodesSuiviAbsencesDansEta = $CLI_MethodesSuiviAbsencesDansEta;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_MethodeSuiviAbsences()
    {
        return $this->bCLI_MethodeSuiviAbsences;
    }

    /**
     * @param bool $bCLI_MethodeSuiviAbsences
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_MethodeSuiviAbsences($bCLI_MethodeSuiviAbsences)
    {
        $new = clone $this;
        $new->bCLI_MethodeSuiviAbsences = $bCLI_MethodeSuiviAbsences;

        return $new;
    }

    /**
     * @return int
     */
    public function getCLI_MethodeSuiviAbsences()
    {
        return $this->CLI_MethodeSuiviAbsences;
    }

    /**
     * @param int $CLI_MethodeSuiviAbsences
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_MethodeSuiviAbsences($CLI_MethodeSuiviAbsences)
    {
        $new = clone $this;
        $new->CLI_MethodeSuiviAbsences = $CLI_MethodeSuiviAbsences;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_MethodeSuiviAbsencesDeductionHM()
    {
        return $this->bCLI_MethodeSuiviAbsencesDeductionHM;
    }

    /**
     * @param bool $bCLI_MethodeSuiviAbsencesDeductionHM
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_MethodeSuiviAbsencesDeductionHM($bCLI_MethodeSuiviAbsencesDeductionHM)
    {
        $new = clone $this;
        $new->bCLI_MethodeSuiviAbsencesDeductionHM = $bCLI_MethodeSuiviAbsencesDeductionHM;

        return $new;
    }

    /**
     * @return int
     */
    public function getCLI_MethodeSuiviAbsencesDeductionHM()
    {
        return $this->CLI_MethodeSuiviAbsencesDeductionHM;
    }

    /**
     * @param int $CLI_MethodeSuiviAbsencesDeductionHM
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_MethodeSuiviAbsencesDeductionHM($CLI_MethodeSuiviAbsencesDeductionHM)
    {
        $new = clone $this;
        $new->CLI_MethodeSuiviAbsencesDeductionHM = $CLI_MethodeSuiviAbsencesDeductionHM;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_MethodeSuiviAbsencesJC()
    {
        return $this->bCLI_MethodeSuiviAbsencesJC;
    }

    /**
     * @param bool $bCLI_MethodeSuiviAbsencesJC
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_MethodeSuiviAbsencesJC($bCLI_MethodeSuiviAbsencesJC)
    {
        $new = clone $this;
        $new->bCLI_MethodeSuiviAbsencesJC = $bCLI_MethodeSuiviAbsencesJC;

        return $new;
    }

    /**
     * @return int
     */
    public function getCLI_MethodeSuiviAbsencesJC()
    {
        return $this->CLI_MethodeSuiviAbsencesJC;
    }

    /**
     * @param int $CLI_MethodeSuiviAbsencesJC
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_MethodeSuiviAbsencesJC($CLI_MethodeSuiviAbsencesJC)
    {
        $new = clone $this;
        $new->CLI_MethodeSuiviAbsencesJC = $CLI_MethodeSuiviAbsencesJC;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_MethodeSuiviCP()
    {
        return $this->bCLI_MethodeSuiviCP;
    }

    /**
     * @param bool $bCLI_MethodeSuiviCP
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_MethodeSuiviCP($bCLI_MethodeSuiviCP)
    {
        $new = clone $this;
        $new->bCLI_MethodeSuiviCP = $bCLI_MethodeSuiviCP;

        return $new;
    }

    /**
     * @return int
     */
    public function getCLI_MethodeSuiviCP()
    {
        return $this->CLI_MethodeSuiviCP;
    }

    /**
     * @param int $CLI_MethodeSuiviCP
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_MethodeSuiviCP($CLI_MethodeSuiviCP)
    {
        $new = clone $this;
        $new->CLI_MethodeSuiviCP = $CLI_MethodeSuiviCP;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_MethodeSuiviCPAcqMois()
    {
        return $this->bCLI_MethodeSuiviCPAcqMois;
    }

    /**
     * @param bool $bCLI_MethodeSuiviCPAcqMois
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_MethodeSuiviCPAcqMois($bCLI_MethodeSuiviCPAcqMois)
    {
        $new = clone $this;
        $new->bCLI_MethodeSuiviCPAcqMois = $bCLI_MethodeSuiviCPAcqMois;

        return $new;
    }

    /**
     * @return float
     */
    public function getCLI_MethodeSuiviCPAcqMois()
    {
        return $this->CLI_MethodeSuiviCPAcqMois;
    }

    /**
     * @param float $CLI_MethodeSuiviCPAcqMois
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_MethodeSuiviCPAcqMois($CLI_MethodeSuiviCPAcqMois)
    {
        $new = clone $this;
        $new->CLI_MethodeSuiviCPAcqMois = $CLI_MethodeSuiviCPAcqMois;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_ModuleCTCDActif()
    {
        return $this->bCLI_ModuleCTCDActif;
    }

    /**
     * @param bool $bCLI_ModuleCTCDActif
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_ModuleCTCDActif($bCLI_ModuleCTCDActif)
    {
        $new = clone $this;
        $new->bCLI_ModuleCTCDActif = $bCLI_ModuleCTCDActif;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCLI_ModuleCTCDActif()
    {
        return $this->CLI_ModuleCTCDActif;
    }

    /**
     * @param bool $CLI_ModuleCTCDActif
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_ModuleCTCDActif($CLI_ModuleCTCDActif)
    {
        $new = clone $this;
        $new->CLI_ModuleCTCDActif = $CLI_ModuleCTCDActif;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_MontagePaiePeriodeDebut()
    {
        return $this->bCLI_MontagePaiePeriodeDebut;
    }

    /**
     * @param bool $bCLI_MontagePaiePeriodeDebut
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_MontagePaiePeriodeDebut($bCLI_MontagePaiePeriodeDebut)
    {
        $new = clone $this;
        $new->bCLI_MontagePaiePeriodeDebut = $bCLI_MontagePaiePeriodeDebut;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCLI_MontagePaiePeriodeDebut()
    {
        return $this->CLI_MontagePaiePeriodeDebut;
    }

    /**
     * @param \DateTimeInterface $CLI_MontagePaiePeriodeDebut
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_MontagePaiePeriodeDebut($CLI_MontagePaiePeriodeDebut)
    {
        $new = clone $this;
        $new->CLI_MontagePaiePeriodeDebut = $CLI_MontagePaiePeriodeDebut;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_PaieDecalee()
    {
        return $this->bCLI_PaieDecalee;
    }

    /**
     * @param bool $bCLI_PaieDecalee
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_PaieDecalee($bCLI_PaieDecalee)
    {
        $new = clone $this;
        $new->bCLI_PaieDecalee = $bCLI_PaieDecalee;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCLI_PaieDecalee()
    {
        return $this->CLI_PaieDecalee;
    }

    /**
     * @param bool $CLI_PaieDecalee
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_PaieDecalee($CLI_PaieDecalee)
    {
        $new = clone $this;
        $new->CLI_PaieDecalee = $CLI_PaieDecalee;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_PersonneAContacterMel()
    {
        return $this->bCLI_PersonneAContacterMel;
    }

    /**
     * @param bool $bCLI_PersonneAContacterMel
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_PersonneAContacterMel($bCLI_PersonneAContacterMel)
    {
        $new = clone $this;
        $new->bCLI_PersonneAContacterMel = $bCLI_PersonneAContacterMel;

        return $new;
    }

    /**
     * @return string
     */
    public function getCLI_PersonneAContacterMel()
    {
        return $this->CLI_PersonneAContacterMel;
    }

    /**
     * @param string $CLI_PersonneAContacterMel
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_PersonneAContacterMel($CLI_PersonneAContacterMel)
    {
        $new = clone $this;
        $new->CLI_PersonneAContacterMel = $CLI_PersonneAContacterMel;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_PersonneAContacterNom()
    {
        return $this->bCLI_PersonneAContacterNom;
    }

    /**
     * @param bool $bCLI_PersonneAContacterNom
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_PersonneAContacterNom($bCLI_PersonneAContacterNom)
    {
        $new = clone $this;
        $new->bCLI_PersonneAContacterNom = $bCLI_PersonneAContacterNom;

        return $new;
    }

    /**
     * @return string
     */
    public function getCLI_PersonneAContacterNom()
    {
        return $this->CLI_PersonneAContacterNom;
    }

    /**
     * @param string $CLI_PersonneAContacterNom
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_PersonneAContacterNom($CLI_PersonneAContacterNom)
    {
        $new = clone $this;
        $new->CLI_PersonneAContacterNom = $CLI_PersonneAContacterNom;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_PersonneAContacterPrenom()
    {
        return $this->bCLI_PersonneAContacterPrenom;
    }

    /**
     * @param bool $bCLI_PersonneAContacterPrenom
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_PersonneAContacterPrenom($bCLI_PersonneAContacterPrenom)
    {
        $new = clone $this;
        $new->bCLI_PersonneAContacterPrenom = $bCLI_PersonneAContacterPrenom;

        return $new;
    }

    /**
     * @return string
     */
    public function getCLI_PersonneAContacterPrenom()
    {
        return $this->CLI_PersonneAContacterPrenom;
    }

    /**
     * @param string $CLI_PersonneAContacterPrenom
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_PersonneAContacterPrenom($CLI_PersonneAContacterPrenom)
    {
        $new = clone $this;
        $new->CLI_PersonneAContacterPrenom = $CLI_PersonneAContacterPrenom;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_PersonneAContacterTel()
    {
        return $this->bCLI_PersonneAContacterTel;
    }

    /**
     * @param bool $bCLI_PersonneAContacterTel
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_PersonneAContacterTel($bCLI_PersonneAContacterTel)
    {
        $new = clone $this;
        $new->bCLI_PersonneAContacterTel = $bCLI_PersonneAContacterTel;

        return $new;
    }

    /**
     * @return string
     */
    public function getCLI_PersonneAContacterTel()
    {
        return $this->CLI_PersonneAContacterTel;
    }

    /**
     * @param string $CLI_PersonneAContacterTel
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_PersonneAContacterTel($CLI_PersonneAContacterTel)
    {
        $new = clone $this;
        $new->CLI_PersonneAContacterTel = $CLI_PersonneAContacterTel;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_ReductionFillon19()
    {
        return $this->bCLI_ReductionFillon19;
    }

    /**
     * @param bool $bCLI_ReductionFillon19
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_ReductionFillon19($bCLI_ReductionFillon19)
    {
        $new = clone $this;
        $new->bCLI_ReductionFillon19 = $bCLI_ReductionFillon19;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCLI_ReductionFillon19()
    {
        return $this->CLI_ReductionFillon19;
    }

    /**
     * @param bool $CLI_ReductionFillon19
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_ReductionFillon19($CLI_ReductionFillon19)
    {
        $new = clone $this;
        $new->CLI_ReductionFillon19 = $CLI_ReductionFillon19;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_ReductionFillon19Debut()
    {
        return $this->bCLI_ReductionFillon19Debut;
    }

    /**
     * @param bool $bCLI_ReductionFillon19Debut
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_ReductionFillon19Debut($bCLI_ReductionFillon19Debut)
    {
        $new = clone $this;
        $new->bCLI_ReductionFillon19Debut = $bCLI_ReductionFillon19Debut;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCLI_ReductionFillon19Debut()
    {
        return $this->CLI_ReductionFillon19Debut;
    }

    /**
     * @param \DateTimeInterface $CLI_ReductionFillon19Debut
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_ReductionFillon19Debut($CLI_ReductionFillon19Debut)
    {
        $new = clone $this;
        $new->CLI_ReductionFillon19Debut = $CLI_ReductionFillon19Debut;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_SepaModeComptabilisation()
    {
        return $this->bCLI_SepaModeComptabilisation;
    }

    /**
     * @param bool $bCLI_SepaModeComptabilisation
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_SepaModeComptabilisation($bCLI_SepaModeComptabilisation)
    {
        $new = clone $this;
        $new->bCLI_SepaModeComptabilisation = $bCLI_SepaModeComptabilisation;

        return $new;
    }

    /**
     * @return int
     */
    public function getCLI_SepaModeComptabilisation()
    {
        return $this->CLI_SepaModeComptabilisation;
    }

    /**
     * @param int $CLI_SepaModeComptabilisation
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_SepaModeComptabilisation($CLI_SepaModeComptabilisation)
    {
        $new = clone $this;
        $new->CLI_SepaModeComptabilisation = $CLI_SepaModeComptabilisation;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_SortieAppliJourVersementSalaires()
    {
        return $this->bCLI_SortieAppliJourVersementSalaires;
    }

    /**
     * @param bool $bCLI_SortieAppliJourVersementSalaires
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_SortieAppliJourVersementSalaires($bCLI_SortieAppliJourVersementSalaires)
    {
        $new = clone $this;
        $new->bCLI_SortieAppliJourVersementSalaires = $bCLI_SortieAppliJourVersementSalaires;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCLI_SortieAppliJourVersementSalaires()
    {
        return $this->CLI_SortieAppliJourVersementSalaires;
    }

    /**
     * @param bool $CLI_SortieAppliJourVersementSalaires
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_SortieAppliJourVersementSalaires($CLI_SortieAppliJourVersementSalaires)
    {
        $new = clone $this;
        $new->CLI_SortieAppliJourVersementSalaires = $CLI_SortieAppliJourVersementSalaires;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_SortieAppliModeReglementNormal()
    {
        return $this->bCLI_SortieAppliModeReglementNormal;
    }

    /**
     * @param bool $bCLI_SortieAppliModeReglementNormal
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_SortieAppliModeReglementNormal($bCLI_SortieAppliModeReglementNormal)
    {
        $new = clone $this;
        $new->bCLI_SortieAppliModeReglementNormal = $bCLI_SortieAppliModeReglementNormal;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCLI_SortieAppliModeReglementNormal()
    {
        return $this->CLI_SortieAppliModeReglementNormal;
    }

    /**
     * @param bool $CLI_SortieAppliModeReglementNormal
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_SortieAppliModeReglementNormal($CLI_SortieAppliModeReglementNormal)
    {
        $new = clone $this;
        $new->CLI_SortieAppliModeReglementNormal = $CLI_SortieAppliModeReglementNormal;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_SousMethodeSuiviAbsences()
    {
        return $this->bCLI_SousMethodeSuiviAbsences;
    }

    /**
     * @param bool $bCLI_SousMethodeSuiviAbsences
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_SousMethodeSuiviAbsences($bCLI_SousMethodeSuiviAbsences)
    {
        $new = clone $this;
        $new->bCLI_SousMethodeSuiviAbsences = $bCLI_SousMethodeSuiviAbsences;

        return $new;
    }

    /**
     * @return int
     */
    public function getCLI_SousMethodeSuiviAbsences()
    {
        return $this->CLI_SousMethodeSuiviAbsences;
    }

    /**
     * @param int $CLI_SousMethodeSuiviAbsences
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_SousMethodeSuiviAbsences($CLI_SousMethodeSuiviAbsences)
    {
        $new = clone $this;
        $new->CLI_SousMethodeSuiviAbsences = $CLI_SousMethodeSuiviAbsences;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_SousMethodeSuiviAbsencesFJ()
    {
        return $this->bCLI_SousMethodeSuiviAbsencesFJ;
    }

    /**
     * @param bool $bCLI_SousMethodeSuiviAbsencesFJ
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_SousMethodeSuiviAbsencesFJ($bCLI_SousMethodeSuiviAbsencesFJ)
    {
        $new = clone $this;
        $new->bCLI_SousMethodeSuiviAbsencesFJ = $bCLI_SousMethodeSuiviAbsencesFJ;

        return $new;
    }

    /**
     * @return int
     */
    public function getCLI_SousMethodeSuiviAbsencesFJ()
    {
        return $this->CLI_SousMethodeSuiviAbsencesFJ;
    }

    /**
     * @param int $CLI_SousMethodeSuiviAbsencesFJ
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_SousMethodeSuiviAbsencesFJ($CLI_SousMethodeSuiviAbsencesFJ)
    {
        $new = clone $this;
        $new->CLI_SousMethodeSuiviAbsencesFJ = $CLI_SousMethodeSuiviAbsencesFJ;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_Subrogation()
    {
        return $this->bCLI_Subrogation;
    }

    /**
     * @param bool $bCLI_Subrogation
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_Subrogation($bCLI_Subrogation)
    {
        $new = clone $this;
        $new->bCLI_Subrogation = $bCLI_Subrogation;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCLI_Subrogation()
    {
        return $this->CLI_Subrogation;
    }

    /**
     * @param bool $CLI_Subrogation
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_Subrogation($CLI_Subrogation)
    {
        $new = clone $this;
        $new->CLI_Subrogation = $CLI_Subrogation;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_SubrogationVersEtaPrincipal()
    {
        return $this->bCLI_SubrogationVersEtaPrincipal;
    }

    /**
     * @param bool $bCLI_SubrogationVersEtaPrincipal
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_SubrogationVersEtaPrincipal($bCLI_SubrogationVersEtaPrincipal)
    {
        $new = clone $this;
        $new->bCLI_SubrogationVersEtaPrincipal = $bCLI_SubrogationVersEtaPrincipal;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCLI_SubrogationVersEtaPrincipal()
    {
        return $this->CLI_SubrogationVersEtaPrincipal;
    }

    /**
     * @param bool $CLI_SubrogationVersEtaPrincipal
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_SubrogationVersEtaPrincipal($CLI_SubrogationVersEtaPrincipal)
    {
        $new = clone $this;
        $new->CLI_SubrogationVersEtaPrincipal = $CLI_SubrogationVersEtaPrincipal;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_TassageAbsencesJours()
    {
        return $this->bCLI_TassageAbsencesJours;
    }

    /**
     * @param bool $bCLI_TassageAbsencesJours
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_TassageAbsencesJours($bCLI_TassageAbsencesJours)
    {
        $new = clone $this;
        $new->bCLI_TassageAbsencesJours = $bCLI_TassageAbsencesJours;

        return $new;
    }

    /**
     * @return int
     */
    public function getCLI_TassageAbsencesJours()
    {
        return $this->CLI_TassageAbsencesJours;
    }

    /**
     * @param int $CLI_TassageAbsencesJours
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_TassageAbsencesJours($CLI_TassageAbsencesJours)
    {
        $new = clone $this;
        $new->CLI_TassageAbsencesJours = $CLI_TassageAbsencesJours;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_TaxeApprentissagePayeeCCP()
    {
        return $this->bCLI_TaxeApprentissagePayeeCCP;
    }

    /**
     * @param bool $bCLI_TaxeApprentissagePayeeCCP
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_TaxeApprentissagePayeeCCP($bCLI_TaxeApprentissagePayeeCCP)
    {
        $new = clone $this;
        $new->bCLI_TaxeApprentissagePayeeCCP = $bCLI_TaxeApprentissagePayeeCCP;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCLI_TaxeApprentissagePayeeCCP()
    {
        return $this->CLI_TaxeApprentissagePayeeCCP;
    }

    /**
     * @param bool $CLI_TaxeApprentissagePayeeCCP
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_TaxeApprentissagePayeeCCP($CLI_TaxeApprentissagePayeeCCP)
    {
        $new = clone $this;
        $new->CLI_TaxeApprentissagePayeeCCP = $CLI_TaxeApprentissagePayeeCCP;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCLI_TaxeCotPPrev()
    {
        return $this->bCLI_TaxeCotPPrev;
    }

    /**
     * @param bool $bCLI_TaxeCotPPrev
     * @return CPAISWSSocieteInfoSup
     */
    public function withBCLI_TaxeCotPPrev($bCLI_TaxeCotPPrev)
    {
        $new = clone $this;
        $new->bCLI_TaxeCotPPrev = $bCLI_TaxeCotPPrev;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCLI_TaxeCotPPrev()
    {
        return $this->CLI_TaxeCotPPrev;
    }

    /**
     * @param bool $CLI_TaxeCotPPrev
     * @return CPAISWSSocieteInfoSup
     */
    public function withCLI_TaxeCotPPrev($CLI_TaxeCotPPrev)
    {
        $new = clone $this;
        $new->CLI_TaxeCotPPrev = $CLI_TaxeCotPPrev;

        return $new;
    }
}

