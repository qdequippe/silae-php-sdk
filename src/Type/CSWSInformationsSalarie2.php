<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CSWSInformationsSalarie2
{
    /**
     * @var string
     */
    private $SAL_NOMAFFICHE;

    /**
     * @var string
     */
    private $SAL_MATRICULE;

    /**
     * @var string
     */
    private $SAL_NUMEROSS;

    /**
     * @var string
     */
    private $SAL_ADR1;

    /**
     * @var string
     */
    private $SAL_ADR2;

    /**
     * @var string
     */
    private $SAL_ADR3;

    /**
     * @var string
     */
    private $STE_CPSUPLIBELLE;

    /**
     * @var string
     */
    private $STE_CPSUP2LIBELLE;

    /**
     * @var string
     */
    private $SAL_SUPERVISEUR;

    /**
     * @var bool
     */
    private $EstSonPropreSuperviseur;

    /**
     * @var int
     */
    private $ID_SUPERVISEUR_SVN;

    /**
     * @var bool
     */
    private $PeutSaisir;

    /**
     * @var string
     */
    private $SAL_LIBPERIODEREF;

    /**
     * @var float
     */
    private $SAL_CPN1ACQUIS;

    /**
     * @var float
     */
    private $SAL_CPN1PRIS;

    /**
     * @var float
     */
    private $SAL_CPN1DEMANDE;

    /**
     * @var float
     */
    private $SAL_CPN1SOLDE;

    /**
     * @var float
     */
    private $SAL_CPNACQUIS;

    /**
     * @var float
     */
    private $SAL_CPNPRIS;

    /**
     * @var float
     */
    private $SAL_CPNDEMANDE;

    /**
     * @var float
     */
    private $SAL_CPNSOLDE;

    /**
     * @var float
     */
    private $SAL_RTTACQUIS;

    /**
     * @var float
     */
    private $SAL_RTTPRIS;

    /**
     * @var float
     */
    private $SAL_RTTDEMANDE;

    /**
     * @var float
     */
    private $SAL_RTTSOLDE;

    /**
     * @var float
     */
    private $SAL_CPSUPACQUIS;

    /**
     * @var float
     */
    private $SAL_CPSUPPRIS;

    /**
     * @var float
     */
    private $SAL_CPSUPDEMANDE;

    /**
     * @var float
     */
    private $SAL_CPSUPSOLDE;

    /**
     * @var float
     */
    private $SAL_CPSUP2ACQUIS;

    /**
     * @var float
     */
    private $SAL_CPSUP2PRIS;

    /**
     * @var float
     */
    private $SAL_CPSUP2DEMANDE;

    /**
     * @var float
     */
    private $SAL_CPSUP2SOLDE;

    /**
     * @var float
     */
    private $SAL_DIFACQUIS;

    /**
     * @var float
     */
    private $SAL_DIFPRIS;

    /**
     * @var float
     */
    private $SAL_DIFACQUISFUTUR;

    /**
     * @var float
     */
    private $SAL_DIFSOLDE;

    /**
     * @var string
     */
    private $RaisonSociale;

    /**
     * @var string
     */
    private $Groupe;

    /**
     * @var bool
     */
    private $PortailSalarieActif;

    /**
     * @var int
     */
    private $PortailSalarieNatureIdentifiant;

    /**
     * @var string
     */
    private $PortailSalarieMailCC;

    /**
     * @var int
     */
    private $PortailSalarieControleSolde;

    /**
     * @var string
     */
    private $PortailSalarieDeltaSolde;

    /**
     * @var bool
     */
    private $PortailSalarieBlocageDemiJCP;

    /**
     * @var bool
     */
    private $PortailSalarieVoirEquipeSalarie;

    /**
     * @var bool
     */
    private $PortailSalarieVoirTous;

    /**
     * @var bool
     */
    private $PortailSalarieVoirGroupe;

    /**
     * @var bool
     */
    private $PortailSalarieVoirAbsPortailSeulement;

    /**
     * @var bool
     */
    private $PortailSalarieVoirAbsDetailInactif;

    /**
     * @var bool
     */
    private $PortailSalarieAccesImagesBulletins;

    /**
     * @var bool
     */
    private $PortailSalarieAnnexesBulletins;

    /**
     * @var bool
     */
    private $PortailSalarieNdfBul;

    /**
     * @return string
     */
    public function getSAL_NOMAFFICHE()
    {
        return $this->SAL_NOMAFFICHE;
    }

    /**
     * @param string $SAL_NOMAFFICHE
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_NOMAFFICHE($SAL_NOMAFFICHE)
    {
        $new = clone $this;
        $new->SAL_NOMAFFICHE = $SAL_NOMAFFICHE;

        return $new;
    }

    /**
     * @return string
     */
    public function getSAL_MATRICULE()
    {
        return $this->SAL_MATRICULE;
    }

    /**
     * @param string $SAL_MATRICULE
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_MATRICULE($SAL_MATRICULE)
    {
        $new = clone $this;
        $new->SAL_MATRICULE = $SAL_MATRICULE;

        return $new;
    }

    /**
     * @return string
     */
    public function getSAL_NUMEROSS()
    {
        return $this->SAL_NUMEROSS;
    }

    /**
     * @param string $SAL_NUMEROSS
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_NUMEROSS($SAL_NUMEROSS)
    {
        $new = clone $this;
        $new->SAL_NUMEROSS = $SAL_NUMEROSS;

        return $new;
    }

    /**
     * @return string
     */
    public function getSAL_ADR1()
    {
        return $this->SAL_ADR1;
    }

    /**
     * @param string $SAL_ADR1
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_ADR1($SAL_ADR1)
    {
        $new = clone $this;
        $new->SAL_ADR1 = $SAL_ADR1;

        return $new;
    }

    /**
     * @return string
     */
    public function getSAL_ADR2()
    {
        return $this->SAL_ADR2;
    }

    /**
     * @param string $SAL_ADR2
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_ADR2($SAL_ADR2)
    {
        $new = clone $this;
        $new->SAL_ADR2 = $SAL_ADR2;

        return $new;
    }

    /**
     * @return string
     */
    public function getSAL_ADR3()
    {
        return $this->SAL_ADR3;
    }

    /**
     * @param string $SAL_ADR3
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_ADR3($SAL_ADR3)
    {
        $new = clone $this;
        $new->SAL_ADR3 = $SAL_ADR3;

        return $new;
    }

    /**
     * @return string
     */
    public function getSTE_CPSUPLIBELLE()
    {
        return $this->STE_CPSUPLIBELLE;
    }

    /**
     * @param string $STE_CPSUPLIBELLE
     * @return CSWSInformationsSalarie2
     */
    public function withSTE_CPSUPLIBELLE($STE_CPSUPLIBELLE)
    {
        $new = clone $this;
        $new->STE_CPSUPLIBELLE = $STE_CPSUPLIBELLE;

        return $new;
    }

    /**
     * @return string
     */
    public function getSTE_CPSUP2LIBELLE()
    {
        return $this->STE_CPSUP2LIBELLE;
    }

    /**
     * @param string $STE_CPSUP2LIBELLE
     * @return CSWSInformationsSalarie2
     */
    public function withSTE_CPSUP2LIBELLE($STE_CPSUP2LIBELLE)
    {
        $new = clone $this;
        $new->STE_CPSUP2LIBELLE = $STE_CPSUP2LIBELLE;

        return $new;
    }

    /**
     * @return string
     */
    public function getSAL_SUPERVISEUR()
    {
        return $this->SAL_SUPERVISEUR;
    }

    /**
     * @param string $SAL_SUPERVISEUR
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_SUPERVISEUR($SAL_SUPERVISEUR)
    {
        $new = clone $this;
        $new->SAL_SUPERVISEUR = $SAL_SUPERVISEUR;

        return $new;
    }

    /**
     * @return bool
     */
    public function getEstSonPropreSuperviseur()
    {
        return $this->EstSonPropreSuperviseur;
    }

    /**
     * @param bool $EstSonPropreSuperviseur
     * @return CSWSInformationsSalarie2
     */
    public function withEstSonPropreSuperviseur($EstSonPropreSuperviseur)
    {
        $new = clone $this;
        $new->EstSonPropreSuperviseur = $EstSonPropreSuperviseur;

        return $new;
    }

    /**
     * @return int
     */
    public function getID_SUPERVISEUR_SVN()
    {
        return $this->ID_SUPERVISEUR_SVN;
    }

    /**
     * @param int $ID_SUPERVISEUR_SVN
     * @return CSWSInformationsSalarie2
     */
    public function withID_SUPERVISEUR_SVN($ID_SUPERVISEUR_SVN)
    {
        $new = clone $this;
        $new->ID_SUPERVISEUR_SVN = $ID_SUPERVISEUR_SVN;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPeutSaisir()
    {
        return $this->PeutSaisir;
    }

    /**
     * @param bool $PeutSaisir
     * @return CSWSInformationsSalarie2
     */
    public function withPeutSaisir($PeutSaisir)
    {
        $new = clone $this;
        $new->PeutSaisir = $PeutSaisir;

        return $new;
    }

    /**
     * @return string
     */
    public function getSAL_LIBPERIODEREF()
    {
        return $this->SAL_LIBPERIODEREF;
    }

    /**
     * @param string $SAL_LIBPERIODEREF
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_LIBPERIODEREF($SAL_LIBPERIODEREF)
    {
        $new = clone $this;
        $new->SAL_LIBPERIODEREF = $SAL_LIBPERIODEREF;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPN1ACQUIS()
    {
        return $this->SAL_CPN1ACQUIS;
    }

    /**
     * @param float $SAL_CPN1ACQUIS
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_CPN1ACQUIS($SAL_CPN1ACQUIS)
    {
        $new = clone $this;
        $new->SAL_CPN1ACQUIS = $SAL_CPN1ACQUIS;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPN1PRIS()
    {
        return $this->SAL_CPN1PRIS;
    }

    /**
     * @param float $SAL_CPN1PRIS
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_CPN1PRIS($SAL_CPN1PRIS)
    {
        $new = clone $this;
        $new->SAL_CPN1PRIS = $SAL_CPN1PRIS;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPN1DEMANDE()
    {
        return $this->SAL_CPN1DEMANDE;
    }

    /**
     * @param float $SAL_CPN1DEMANDE
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_CPN1DEMANDE($SAL_CPN1DEMANDE)
    {
        $new = clone $this;
        $new->SAL_CPN1DEMANDE = $SAL_CPN1DEMANDE;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPN1SOLDE()
    {
        return $this->SAL_CPN1SOLDE;
    }

    /**
     * @param float $SAL_CPN1SOLDE
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_CPN1SOLDE($SAL_CPN1SOLDE)
    {
        $new = clone $this;
        $new->SAL_CPN1SOLDE = $SAL_CPN1SOLDE;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPNACQUIS()
    {
        return $this->SAL_CPNACQUIS;
    }

    /**
     * @param float $SAL_CPNACQUIS
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_CPNACQUIS($SAL_CPNACQUIS)
    {
        $new = clone $this;
        $new->SAL_CPNACQUIS = $SAL_CPNACQUIS;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPNPRIS()
    {
        return $this->SAL_CPNPRIS;
    }

    /**
     * @param float $SAL_CPNPRIS
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_CPNPRIS($SAL_CPNPRIS)
    {
        $new = clone $this;
        $new->SAL_CPNPRIS = $SAL_CPNPRIS;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPNDEMANDE()
    {
        return $this->SAL_CPNDEMANDE;
    }

    /**
     * @param float $SAL_CPNDEMANDE
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_CPNDEMANDE($SAL_CPNDEMANDE)
    {
        $new = clone $this;
        $new->SAL_CPNDEMANDE = $SAL_CPNDEMANDE;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPNSOLDE()
    {
        return $this->SAL_CPNSOLDE;
    }

    /**
     * @param float $SAL_CPNSOLDE
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_CPNSOLDE($SAL_CPNSOLDE)
    {
        $new = clone $this;
        $new->SAL_CPNSOLDE = $SAL_CPNSOLDE;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_RTTACQUIS()
    {
        return $this->SAL_RTTACQUIS;
    }

    /**
     * @param float $SAL_RTTACQUIS
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_RTTACQUIS($SAL_RTTACQUIS)
    {
        $new = clone $this;
        $new->SAL_RTTACQUIS = $SAL_RTTACQUIS;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_RTTPRIS()
    {
        return $this->SAL_RTTPRIS;
    }

    /**
     * @param float $SAL_RTTPRIS
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_RTTPRIS($SAL_RTTPRIS)
    {
        $new = clone $this;
        $new->SAL_RTTPRIS = $SAL_RTTPRIS;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_RTTDEMANDE()
    {
        return $this->SAL_RTTDEMANDE;
    }

    /**
     * @param float $SAL_RTTDEMANDE
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_RTTDEMANDE($SAL_RTTDEMANDE)
    {
        $new = clone $this;
        $new->SAL_RTTDEMANDE = $SAL_RTTDEMANDE;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_RTTSOLDE()
    {
        return $this->SAL_RTTSOLDE;
    }

    /**
     * @param float $SAL_RTTSOLDE
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_RTTSOLDE($SAL_RTTSOLDE)
    {
        $new = clone $this;
        $new->SAL_RTTSOLDE = $SAL_RTTSOLDE;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPSUPACQUIS()
    {
        return $this->SAL_CPSUPACQUIS;
    }

    /**
     * @param float $SAL_CPSUPACQUIS
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_CPSUPACQUIS($SAL_CPSUPACQUIS)
    {
        $new = clone $this;
        $new->SAL_CPSUPACQUIS = $SAL_CPSUPACQUIS;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPSUPPRIS()
    {
        return $this->SAL_CPSUPPRIS;
    }

    /**
     * @param float $SAL_CPSUPPRIS
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_CPSUPPRIS($SAL_CPSUPPRIS)
    {
        $new = clone $this;
        $new->SAL_CPSUPPRIS = $SAL_CPSUPPRIS;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPSUPDEMANDE()
    {
        return $this->SAL_CPSUPDEMANDE;
    }

    /**
     * @param float $SAL_CPSUPDEMANDE
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_CPSUPDEMANDE($SAL_CPSUPDEMANDE)
    {
        $new = clone $this;
        $new->SAL_CPSUPDEMANDE = $SAL_CPSUPDEMANDE;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPSUPSOLDE()
    {
        return $this->SAL_CPSUPSOLDE;
    }

    /**
     * @param float $SAL_CPSUPSOLDE
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_CPSUPSOLDE($SAL_CPSUPSOLDE)
    {
        $new = clone $this;
        $new->SAL_CPSUPSOLDE = $SAL_CPSUPSOLDE;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPSUP2ACQUIS()
    {
        return $this->SAL_CPSUP2ACQUIS;
    }

    /**
     * @param float $SAL_CPSUP2ACQUIS
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_CPSUP2ACQUIS($SAL_CPSUP2ACQUIS)
    {
        $new = clone $this;
        $new->SAL_CPSUP2ACQUIS = $SAL_CPSUP2ACQUIS;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPSUP2PRIS()
    {
        return $this->SAL_CPSUP2PRIS;
    }

    /**
     * @param float $SAL_CPSUP2PRIS
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_CPSUP2PRIS($SAL_CPSUP2PRIS)
    {
        $new = clone $this;
        $new->SAL_CPSUP2PRIS = $SAL_CPSUP2PRIS;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPSUP2DEMANDE()
    {
        return $this->SAL_CPSUP2DEMANDE;
    }

    /**
     * @param float $SAL_CPSUP2DEMANDE
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_CPSUP2DEMANDE($SAL_CPSUP2DEMANDE)
    {
        $new = clone $this;
        $new->SAL_CPSUP2DEMANDE = $SAL_CPSUP2DEMANDE;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPSUP2SOLDE()
    {
        return $this->SAL_CPSUP2SOLDE;
    }

    /**
     * @param float $SAL_CPSUP2SOLDE
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_CPSUP2SOLDE($SAL_CPSUP2SOLDE)
    {
        $new = clone $this;
        $new->SAL_CPSUP2SOLDE = $SAL_CPSUP2SOLDE;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_DIFACQUIS()
    {
        return $this->SAL_DIFACQUIS;
    }

    /**
     * @param float $SAL_DIFACQUIS
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_DIFACQUIS($SAL_DIFACQUIS)
    {
        $new = clone $this;
        $new->SAL_DIFACQUIS = $SAL_DIFACQUIS;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_DIFPRIS()
    {
        return $this->SAL_DIFPRIS;
    }

    /**
     * @param float $SAL_DIFPRIS
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_DIFPRIS($SAL_DIFPRIS)
    {
        $new = clone $this;
        $new->SAL_DIFPRIS = $SAL_DIFPRIS;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_DIFACQUISFUTUR()
    {
        return $this->SAL_DIFACQUISFUTUR;
    }

    /**
     * @param float $SAL_DIFACQUISFUTUR
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_DIFACQUISFUTUR($SAL_DIFACQUISFUTUR)
    {
        $new = clone $this;
        $new->SAL_DIFACQUISFUTUR = $SAL_DIFACQUISFUTUR;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_DIFSOLDE()
    {
        return $this->SAL_DIFSOLDE;
    }

    /**
     * @param float $SAL_DIFSOLDE
     * @return CSWSInformationsSalarie2
     */
    public function withSAL_DIFSOLDE($SAL_DIFSOLDE)
    {
        $new = clone $this;
        $new->SAL_DIFSOLDE = $SAL_DIFSOLDE;

        return $new;
    }

    /**
     * @return string
     */
    public function getRaisonSociale()
    {
        return $this->RaisonSociale;
    }

    /**
     * @param string $RaisonSociale
     * @return CSWSInformationsSalarie2
     */
    public function withRaisonSociale($RaisonSociale)
    {
        $new = clone $this;
        $new->RaisonSociale = $RaisonSociale;

        return $new;
    }

    /**
     * @return string
     */
    public function getGroupe()
    {
        return $this->Groupe;
    }

    /**
     * @param string $Groupe
     * @return CSWSInformationsSalarie2
     */
    public function withGroupe($Groupe)
    {
        $new = clone $this;
        $new->Groupe = $Groupe;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPortailSalarieActif()
    {
        return $this->PortailSalarieActif;
    }

    /**
     * @param bool $PortailSalarieActif
     * @return CSWSInformationsSalarie2
     */
    public function withPortailSalarieActif($PortailSalarieActif)
    {
        $new = clone $this;
        $new->PortailSalarieActif = $PortailSalarieActif;

        return $new;
    }

    /**
     * @return int
     */
    public function getPortailSalarieNatureIdentifiant()
    {
        return $this->PortailSalarieNatureIdentifiant;
    }

    /**
     * @param int $PortailSalarieNatureIdentifiant
     * @return CSWSInformationsSalarie2
     */
    public function withPortailSalarieNatureIdentifiant($PortailSalarieNatureIdentifiant)
    {
        $new = clone $this;
        $new->PortailSalarieNatureIdentifiant = $PortailSalarieNatureIdentifiant;

        return $new;
    }

    /**
     * @return string
     */
    public function getPortailSalarieMailCC()
    {
        return $this->PortailSalarieMailCC;
    }

    /**
     * @param string $PortailSalarieMailCC
     * @return CSWSInformationsSalarie2
     */
    public function withPortailSalarieMailCC($PortailSalarieMailCC)
    {
        $new = clone $this;
        $new->PortailSalarieMailCC = $PortailSalarieMailCC;

        return $new;
    }

    /**
     * @return int
     */
    public function getPortailSalarieControleSolde()
    {
        return $this->PortailSalarieControleSolde;
    }

    /**
     * @param int $PortailSalarieControleSolde
     * @return CSWSInformationsSalarie2
     */
    public function withPortailSalarieControleSolde($PortailSalarieControleSolde)
    {
        $new = clone $this;
        $new->PortailSalarieControleSolde = $PortailSalarieControleSolde;

        return $new;
    }

    /**
     * @return string
     */
    public function getPortailSalarieDeltaSolde()
    {
        return $this->PortailSalarieDeltaSolde;
    }

    /**
     * @param string $PortailSalarieDeltaSolde
     * @return CSWSInformationsSalarie2
     */
    public function withPortailSalarieDeltaSolde($PortailSalarieDeltaSolde)
    {
        $new = clone $this;
        $new->PortailSalarieDeltaSolde = $PortailSalarieDeltaSolde;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPortailSalarieBlocageDemiJCP()
    {
        return $this->PortailSalarieBlocageDemiJCP;
    }

    /**
     * @param bool $PortailSalarieBlocageDemiJCP
     * @return CSWSInformationsSalarie2
     */
    public function withPortailSalarieBlocageDemiJCP($PortailSalarieBlocageDemiJCP)
    {
        $new = clone $this;
        $new->PortailSalarieBlocageDemiJCP = $PortailSalarieBlocageDemiJCP;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPortailSalarieVoirEquipeSalarie()
    {
        return $this->PortailSalarieVoirEquipeSalarie;
    }

    /**
     * @param bool $PortailSalarieVoirEquipeSalarie
     * @return CSWSInformationsSalarie2
     */
    public function withPortailSalarieVoirEquipeSalarie($PortailSalarieVoirEquipeSalarie)
    {
        $new = clone $this;
        $new->PortailSalarieVoirEquipeSalarie = $PortailSalarieVoirEquipeSalarie;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPortailSalarieVoirTous()
    {
        return $this->PortailSalarieVoirTous;
    }

    /**
     * @param bool $PortailSalarieVoirTous
     * @return CSWSInformationsSalarie2
     */
    public function withPortailSalarieVoirTous($PortailSalarieVoirTous)
    {
        $new = clone $this;
        $new->PortailSalarieVoirTous = $PortailSalarieVoirTous;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPortailSalarieVoirGroupe()
    {
        return $this->PortailSalarieVoirGroupe;
    }

    /**
     * @param bool $PortailSalarieVoirGroupe
     * @return CSWSInformationsSalarie2
     */
    public function withPortailSalarieVoirGroupe($PortailSalarieVoirGroupe)
    {
        $new = clone $this;
        $new->PortailSalarieVoirGroupe = $PortailSalarieVoirGroupe;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPortailSalarieVoirAbsPortailSeulement()
    {
        return $this->PortailSalarieVoirAbsPortailSeulement;
    }

    /**
     * @param bool $PortailSalarieVoirAbsPortailSeulement
     * @return CSWSInformationsSalarie2
     */
    public function withPortailSalarieVoirAbsPortailSeulement($PortailSalarieVoirAbsPortailSeulement)
    {
        $new = clone $this;
        $new->PortailSalarieVoirAbsPortailSeulement = $PortailSalarieVoirAbsPortailSeulement;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPortailSalarieVoirAbsDetailInactif()
    {
        return $this->PortailSalarieVoirAbsDetailInactif;
    }

    /**
     * @param bool $PortailSalarieVoirAbsDetailInactif
     * @return CSWSInformationsSalarie2
     */
    public function withPortailSalarieVoirAbsDetailInactif($PortailSalarieVoirAbsDetailInactif)
    {
        $new = clone $this;
        $new->PortailSalarieVoirAbsDetailInactif = $PortailSalarieVoirAbsDetailInactif;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPortailSalarieAccesImagesBulletins()
    {
        return $this->PortailSalarieAccesImagesBulletins;
    }

    /**
     * @param bool $PortailSalarieAccesImagesBulletins
     * @return CSWSInformationsSalarie2
     */
    public function withPortailSalarieAccesImagesBulletins($PortailSalarieAccesImagesBulletins)
    {
        $new = clone $this;
        $new->PortailSalarieAccesImagesBulletins = $PortailSalarieAccesImagesBulletins;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPortailSalarieAnnexesBulletins()
    {
        return $this->PortailSalarieAnnexesBulletins;
    }

    /**
     * @param bool $PortailSalarieAnnexesBulletins
     * @return CSWSInformationsSalarie2
     */
    public function withPortailSalarieAnnexesBulletins($PortailSalarieAnnexesBulletins)
    {
        $new = clone $this;
        $new->PortailSalarieAnnexesBulletins = $PortailSalarieAnnexesBulletins;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPortailSalarieNdfBul()
    {
        return $this->PortailSalarieNdfBul;
    }

    /**
     * @param bool $PortailSalarieNdfBul
     * @return CSWSInformationsSalarie2
     */
    public function withPortailSalarieNdfBul($PortailSalarieNdfBul)
    {
        $new = clone $this;
        $new->PortailSalarieNdfBul = $PortailSalarieNdfBul;

        return $new;
    }
}

