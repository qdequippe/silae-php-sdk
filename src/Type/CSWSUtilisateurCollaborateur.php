<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CSWSUtilisateurCollaborateur
{
    /**
     * @var string
     */
    private $CodeCollaborateur;

    /**
     * @var string
     */
    private $NomNaissance;

    /**
     * @var string
     */
    private $NomMarital;

    /**
     * @var string
     */
    private $NomUsuel;

    /**
     * @var string
     */
    private $Prenom;

    /**
     * @var bool
     */
    private $bTelPortable;

    /**
     * @var string
     */
    private $TelPortable;

    /**
     * @var bool
     */
    private $bTelBureau;

    /**
     * @var string
     */
    private $TelBureau;

    /**
     * @var bool
     */
    private $bTelDomicile;

    /**
     * @var string
     */
    private $TelDomicile;

    /**
     * @var bool
     */
    private $bMail;

    /**
     * @var string
     */
    private $Mail;

    /**
     * @var bool
     */
    private $bCodeAgence;

    /**
     * @var string
     */
    private $CodeAgence;

    /**
     * @var bool
     */
    private $bAffectations;

    /**
     * @var bool
     */
    private $Affectation1;

    /**
     * @var bool
     */
    private $Affectation2;

    /**
     * @var bool
     */
    private $Affectation3;

    /**
     * @var bool
     */
    private $Affectation4;

    /**
     * @var bool
     */
    private $Affectation5;

    /**
     * @var bool
     */
    private $Affectation6;

    /**
     * @var bool
     */
    private $Affectation7;

    /**
     * @var bool
     */
    private $Affectation8;

    /**
     * @var bool
     */
    private $Affectation9;

    /**
     * @var string
     */
    private $Identifiant;

    /**
     * @var string
     */
    private $AncienMotDePasse;

    /**
     * @var string
     */
    private $MotDePasse;

    /**
     * @var \DateTimeInterface
     */
    private $DebutValidite;

    /**
     * @var \DateTimeInterface
     */
    private $FinValidite;

    /**
     * @var bool
     */
    private $bDateEntree;

    /**
     * @var \DateTimeInterface
     */
    private $DateEntree;

    /**
     * @var bool
     */
    private $bDateSortie;

    /**
     * @var \DateTimeInterface
     */
    private $DateSortie;

    /**
     * @var bool
     */
    private $Onglet_Production;

    /**
     * @var bool
     */
    private $Onglet_GestionInterne;

    /**
     * @var bool
     */
    private $Onglet_GestionInterneSimplifiee;

    /**
     * @var bool
     */
    private $Onglet_GestionDesIdentifiants;

    /**
     * @var bool
     */
    private $Onglet_ParametragePaie;

    /**
     * @var bool
     */
    private $Onglet_ParametrageCompta;

    /**
     * @var bool
     */
    private $Onglet_RobotDePaie;

    /**
     * @var bool
     */
    private $Onglet_Outils;

    /**
     * @var bool
     */
    private $Onglet_AnalyseActivitePaie;

    /**
     * @var bool
     */
    private $Onglet_AnalyseActiviteCompta;

    /**
     * @var bool
     */
    private $RestrictionPaie_FicheSociete_EtatDossier;

    /**
     * @var int
     */
    private $NiveauConfidentialiteSalarie;

    /**
     * @var bool
     */
    private $DroitsLimitesPaie;

    /**
     * @var bool
     */
    private $DroitsLimitesCompta;

    /**
     * @var string
     */
    private $ListesCollaborateursDroits;

    /**
     * @var string
     */
    private $RequeteDroits;

    /**
     * @return string
     */
    public function getCodeCollaborateur()
    {
        return $this->CodeCollaborateur;
    }

    /**
     * @param string $CodeCollaborateur
     * @return CSWSUtilisateurCollaborateur
     */
    public function withCodeCollaborateur($CodeCollaborateur)
    {
        $new = clone $this;
        $new->CodeCollaborateur = $CodeCollaborateur;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomNaissance()
    {
        return $this->NomNaissance;
    }

    /**
     * @param string $NomNaissance
     * @return CSWSUtilisateurCollaborateur
     */
    public function withNomNaissance($NomNaissance)
    {
        $new = clone $this;
        $new->NomNaissance = $NomNaissance;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomMarital()
    {
        return $this->NomMarital;
    }

    /**
     * @param string $NomMarital
     * @return CSWSUtilisateurCollaborateur
     */
    public function withNomMarital($NomMarital)
    {
        $new = clone $this;
        $new->NomMarital = $NomMarital;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomUsuel()
    {
        return $this->NomUsuel;
    }

    /**
     * @param string $NomUsuel
     * @return CSWSUtilisateurCollaborateur
     */
    public function withNomUsuel($NomUsuel)
    {
        $new = clone $this;
        $new->NomUsuel = $NomUsuel;

        return $new;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * @param string $Prenom
     * @return CSWSUtilisateurCollaborateur
     */
    public function withPrenom($Prenom)
    {
        $new = clone $this;
        $new->Prenom = $Prenom;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBTelPortable()
    {
        return $this->bTelPortable;
    }

    /**
     * @param bool $bTelPortable
     * @return CSWSUtilisateurCollaborateur
     */
    public function withBTelPortable($bTelPortable)
    {
        $new = clone $this;
        $new->bTelPortable = $bTelPortable;

        return $new;
    }

    /**
     * @return string
     */
    public function getTelPortable()
    {
        return $this->TelPortable;
    }

    /**
     * @param string $TelPortable
     * @return CSWSUtilisateurCollaborateur
     */
    public function withTelPortable($TelPortable)
    {
        $new = clone $this;
        $new->TelPortable = $TelPortable;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBTelBureau()
    {
        return $this->bTelBureau;
    }

    /**
     * @param bool $bTelBureau
     * @return CSWSUtilisateurCollaborateur
     */
    public function withBTelBureau($bTelBureau)
    {
        $new = clone $this;
        $new->bTelBureau = $bTelBureau;

        return $new;
    }

    /**
     * @return string
     */
    public function getTelBureau()
    {
        return $this->TelBureau;
    }

    /**
     * @param string $TelBureau
     * @return CSWSUtilisateurCollaborateur
     */
    public function withTelBureau($TelBureau)
    {
        $new = clone $this;
        $new->TelBureau = $TelBureau;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBTelDomicile()
    {
        return $this->bTelDomicile;
    }

    /**
     * @param bool $bTelDomicile
     * @return CSWSUtilisateurCollaborateur
     */
    public function withBTelDomicile($bTelDomicile)
    {
        $new = clone $this;
        $new->bTelDomicile = $bTelDomicile;

        return $new;
    }

    /**
     * @return string
     */
    public function getTelDomicile()
    {
        return $this->TelDomicile;
    }

    /**
     * @param string $TelDomicile
     * @return CSWSUtilisateurCollaborateur
     */
    public function withTelDomicile($TelDomicile)
    {
        $new = clone $this;
        $new->TelDomicile = $TelDomicile;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBMail()
    {
        return $this->bMail;
    }

    /**
     * @param bool $bMail
     * @return CSWSUtilisateurCollaborateur
     */
    public function withBMail($bMail)
    {
        $new = clone $this;
        $new->bMail = $bMail;

        return $new;
    }

    /**
     * @return string
     */
    public function getMail()
    {
        return $this->Mail;
    }

    /**
     * @param string $Mail
     * @return CSWSUtilisateurCollaborateur
     */
    public function withMail($Mail)
    {
        $new = clone $this;
        $new->Mail = $Mail;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCodeAgence()
    {
        return $this->bCodeAgence;
    }

    /**
     * @param bool $bCodeAgence
     * @return CSWSUtilisateurCollaborateur
     */
    public function withBCodeAgence($bCodeAgence)
    {
        $new = clone $this;
        $new->bCodeAgence = $bCodeAgence;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeAgence()
    {
        return $this->CodeAgence;
    }

    /**
     * @param string $CodeAgence
     * @return CSWSUtilisateurCollaborateur
     */
    public function withCodeAgence($CodeAgence)
    {
        $new = clone $this;
        $new->CodeAgence = $CodeAgence;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBAffectations()
    {
        return $this->bAffectations;
    }

    /**
     * @param bool $bAffectations
     * @return CSWSUtilisateurCollaborateur
     */
    public function withBAffectations($bAffectations)
    {
        $new = clone $this;
        $new->bAffectations = $bAffectations;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAffectation1()
    {
        return $this->Affectation1;
    }

    /**
     * @param bool $Affectation1
     * @return CSWSUtilisateurCollaborateur
     */
    public function withAffectation1($Affectation1)
    {
        $new = clone $this;
        $new->Affectation1 = $Affectation1;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAffectation2()
    {
        return $this->Affectation2;
    }

    /**
     * @param bool $Affectation2
     * @return CSWSUtilisateurCollaborateur
     */
    public function withAffectation2($Affectation2)
    {
        $new = clone $this;
        $new->Affectation2 = $Affectation2;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAffectation3()
    {
        return $this->Affectation3;
    }

    /**
     * @param bool $Affectation3
     * @return CSWSUtilisateurCollaborateur
     */
    public function withAffectation3($Affectation3)
    {
        $new = clone $this;
        $new->Affectation3 = $Affectation3;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAffectation4()
    {
        return $this->Affectation4;
    }

    /**
     * @param bool $Affectation4
     * @return CSWSUtilisateurCollaborateur
     */
    public function withAffectation4($Affectation4)
    {
        $new = clone $this;
        $new->Affectation4 = $Affectation4;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAffectation5()
    {
        return $this->Affectation5;
    }

    /**
     * @param bool $Affectation5
     * @return CSWSUtilisateurCollaborateur
     */
    public function withAffectation5($Affectation5)
    {
        $new = clone $this;
        $new->Affectation5 = $Affectation5;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAffectation6()
    {
        return $this->Affectation6;
    }

    /**
     * @param bool $Affectation6
     * @return CSWSUtilisateurCollaborateur
     */
    public function withAffectation6($Affectation6)
    {
        $new = clone $this;
        $new->Affectation6 = $Affectation6;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAffectation7()
    {
        return $this->Affectation7;
    }

    /**
     * @param bool $Affectation7
     * @return CSWSUtilisateurCollaborateur
     */
    public function withAffectation7($Affectation7)
    {
        $new = clone $this;
        $new->Affectation7 = $Affectation7;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAffectation8()
    {
        return $this->Affectation8;
    }

    /**
     * @param bool $Affectation8
     * @return CSWSUtilisateurCollaborateur
     */
    public function withAffectation8($Affectation8)
    {
        $new = clone $this;
        $new->Affectation8 = $Affectation8;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAffectation9()
    {
        return $this->Affectation9;
    }

    /**
     * @param bool $Affectation9
     * @return CSWSUtilisateurCollaborateur
     */
    public function withAffectation9($Affectation9)
    {
        $new = clone $this;
        $new->Affectation9 = $Affectation9;

        return $new;
    }

    /**
     * @return string
     */
    public function getIdentifiant()
    {
        return $this->Identifiant;
    }

    /**
     * @param string $Identifiant
     * @return CSWSUtilisateurCollaborateur
     */
    public function withIdentifiant($Identifiant)
    {
        $new = clone $this;
        $new->Identifiant = $Identifiant;

        return $new;
    }

    /**
     * @return string
     */
    public function getAncienMotDePasse()
    {
        return $this->AncienMotDePasse;
    }

    /**
     * @param string $AncienMotDePasse
     * @return CSWSUtilisateurCollaborateur
     */
    public function withAncienMotDePasse($AncienMotDePasse)
    {
        $new = clone $this;
        $new->AncienMotDePasse = $AncienMotDePasse;

        return $new;
    }

    /**
     * @return string
     */
    public function getMotDePasse()
    {
        return $this->MotDePasse;
    }

    /**
     * @param string $MotDePasse
     * @return CSWSUtilisateurCollaborateur
     */
    public function withMotDePasse($MotDePasse)
    {
        $new = clone $this;
        $new->MotDePasse = $MotDePasse;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDebutValidite()
    {
        return $this->DebutValidite;
    }

    /**
     * @param \DateTimeInterface $DebutValidite
     * @return CSWSUtilisateurCollaborateur
     */
    public function withDebutValidite($DebutValidite)
    {
        $new = clone $this;
        $new->DebutValidite = $DebutValidite;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getFinValidite()
    {
        return $this->FinValidite;
    }

    /**
     * @param \DateTimeInterface $FinValidite
     * @return CSWSUtilisateurCollaborateur
     */
    public function withFinValidite($FinValidite)
    {
        $new = clone $this;
        $new->FinValidite = $FinValidite;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBDateEntree()
    {
        return $this->bDateEntree;
    }

    /**
     * @param bool $bDateEntree
     * @return CSWSUtilisateurCollaborateur
     */
    public function withBDateEntree($bDateEntree)
    {
        $new = clone $this;
        $new->bDateEntree = $bDateEntree;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateEntree()
    {
        return $this->DateEntree;
    }

    /**
     * @param \DateTimeInterface $DateEntree
     * @return CSWSUtilisateurCollaborateur
     */
    public function withDateEntree($DateEntree)
    {
        $new = clone $this;
        $new->DateEntree = $DateEntree;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBDateSortie()
    {
        return $this->bDateSortie;
    }

    /**
     * @param bool $bDateSortie
     * @return CSWSUtilisateurCollaborateur
     */
    public function withBDateSortie($bDateSortie)
    {
        $new = clone $this;
        $new->bDateSortie = $bDateSortie;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateSortie()
    {
        return $this->DateSortie;
    }

    /**
     * @param \DateTimeInterface $DateSortie
     * @return CSWSUtilisateurCollaborateur
     */
    public function withDateSortie($DateSortie)
    {
        $new = clone $this;
        $new->DateSortie = $DateSortie;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOnglet_Production()
    {
        return $this->Onglet_Production;
    }

    /**
     * @param bool $Onglet_Production
     * @return CSWSUtilisateurCollaborateur
     */
    public function withOnglet_Production($Onglet_Production)
    {
        $new = clone $this;
        $new->Onglet_Production = $Onglet_Production;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOnglet_GestionInterne()
    {
        return $this->Onglet_GestionInterne;
    }

    /**
     * @param bool $Onglet_GestionInterne
     * @return CSWSUtilisateurCollaborateur
     */
    public function withOnglet_GestionInterne($Onglet_GestionInterne)
    {
        $new = clone $this;
        $new->Onglet_GestionInterne = $Onglet_GestionInterne;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOnglet_GestionInterneSimplifiee()
    {
        return $this->Onglet_GestionInterneSimplifiee;
    }

    /**
     * @param bool $Onglet_GestionInterneSimplifiee
     * @return CSWSUtilisateurCollaborateur
     */
    public function withOnglet_GestionInterneSimplifiee($Onglet_GestionInterneSimplifiee)
    {
        $new = clone $this;
        $new->Onglet_GestionInterneSimplifiee = $Onglet_GestionInterneSimplifiee;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOnglet_GestionDesIdentifiants()
    {
        return $this->Onglet_GestionDesIdentifiants;
    }

    /**
     * @param bool $Onglet_GestionDesIdentifiants
     * @return CSWSUtilisateurCollaborateur
     */
    public function withOnglet_GestionDesIdentifiants($Onglet_GestionDesIdentifiants)
    {
        $new = clone $this;
        $new->Onglet_GestionDesIdentifiants = $Onglet_GestionDesIdentifiants;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOnglet_ParametragePaie()
    {
        return $this->Onglet_ParametragePaie;
    }

    /**
     * @param bool $Onglet_ParametragePaie
     * @return CSWSUtilisateurCollaborateur
     */
    public function withOnglet_ParametragePaie($Onglet_ParametragePaie)
    {
        $new = clone $this;
        $new->Onglet_ParametragePaie = $Onglet_ParametragePaie;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOnglet_ParametrageCompta()
    {
        return $this->Onglet_ParametrageCompta;
    }

    /**
     * @param bool $Onglet_ParametrageCompta
     * @return CSWSUtilisateurCollaborateur
     */
    public function withOnglet_ParametrageCompta($Onglet_ParametrageCompta)
    {
        $new = clone $this;
        $new->Onglet_ParametrageCompta = $Onglet_ParametrageCompta;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOnglet_RobotDePaie()
    {
        return $this->Onglet_RobotDePaie;
    }

    /**
     * @param bool $Onglet_RobotDePaie
     * @return CSWSUtilisateurCollaborateur
     */
    public function withOnglet_RobotDePaie($Onglet_RobotDePaie)
    {
        $new = clone $this;
        $new->Onglet_RobotDePaie = $Onglet_RobotDePaie;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOnglet_Outils()
    {
        return $this->Onglet_Outils;
    }

    /**
     * @param bool $Onglet_Outils
     * @return CSWSUtilisateurCollaborateur
     */
    public function withOnglet_Outils($Onglet_Outils)
    {
        $new = clone $this;
        $new->Onglet_Outils = $Onglet_Outils;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOnglet_AnalyseActivitePaie()
    {
        return $this->Onglet_AnalyseActivitePaie;
    }

    /**
     * @param bool $Onglet_AnalyseActivitePaie
     * @return CSWSUtilisateurCollaborateur
     */
    public function withOnglet_AnalyseActivitePaie($Onglet_AnalyseActivitePaie)
    {
        $new = clone $this;
        $new->Onglet_AnalyseActivitePaie = $Onglet_AnalyseActivitePaie;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOnglet_AnalyseActiviteCompta()
    {
        return $this->Onglet_AnalyseActiviteCompta;
    }

    /**
     * @param bool $Onglet_AnalyseActiviteCompta
     * @return CSWSUtilisateurCollaborateur
     */
    public function withOnglet_AnalyseActiviteCompta($Onglet_AnalyseActiviteCompta)
    {
        $new = clone $this;
        $new->Onglet_AnalyseActiviteCompta = $Onglet_AnalyseActiviteCompta;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRestrictionPaie_FicheSociete_EtatDossier()
    {
        return $this->RestrictionPaie_FicheSociete_EtatDossier;
    }

    /**
     * @param bool $RestrictionPaie_FicheSociete_EtatDossier
     * @return CSWSUtilisateurCollaborateur
     */
    public function withRestrictionPaie_FicheSociete_EtatDossier($RestrictionPaie_FicheSociete_EtatDossier)
    {
        $new = clone $this;
        $new->RestrictionPaie_FicheSociete_EtatDossier = $RestrictionPaie_FicheSociete_EtatDossier;

        return $new;
    }

    /**
     * @return int
     */
    public function getNiveauConfidentialiteSalarie()
    {
        return $this->NiveauConfidentialiteSalarie;
    }

    /**
     * @param int $NiveauConfidentialiteSalarie
     * @return CSWSUtilisateurCollaborateur
     */
    public function withNiveauConfidentialiteSalarie($NiveauConfidentialiteSalarie)
    {
        $new = clone $this;
        $new->NiveauConfidentialiteSalarie = $NiveauConfidentialiteSalarie;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDroitsLimitesPaie()
    {
        return $this->DroitsLimitesPaie;
    }

    /**
     * @param bool $DroitsLimitesPaie
     * @return CSWSUtilisateurCollaborateur
     */
    public function withDroitsLimitesPaie($DroitsLimitesPaie)
    {
        $new = clone $this;
        $new->DroitsLimitesPaie = $DroitsLimitesPaie;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDroitsLimitesCompta()
    {
        return $this->DroitsLimitesCompta;
    }

    /**
     * @param bool $DroitsLimitesCompta
     * @return CSWSUtilisateurCollaborateur
     */
    public function withDroitsLimitesCompta($DroitsLimitesCompta)
    {
        $new = clone $this;
        $new->DroitsLimitesCompta = $DroitsLimitesCompta;

        return $new;
    }

    /**
     * @return string
     */
    public function getListesCollaborateursDroits()
    {
        return $this->ListesCollaborateursDroits;
    }

    /**
     * @param string $ListesCollaborateursDroits
     * @return CSWSUtilisateurCollaborateur
     */
    public function withListesCollaborateursDroits($ListesCollaborateursDroits)
    {
        $new = clone $this;
        $new->ListesCollaborateursDroits = $ListesCollaborateursDroits;

        return $new;
    }

    /**
     * @return string
     */
    public function getRequeteDroits()
    {
        return $this->RequeteDroits;
    }

    /**
     * @param string $RequeteDroits
     * @return CSWSUtilisateurCollaborateur
     */
    public function withRequeteDroits($RequeteDroits)
    {
        $new = clone $this;
        $new->RequeteDroits = $RequeteDroits;

        return $new;
    }
}

