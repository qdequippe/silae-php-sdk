<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSEmploi
{
    /**
     * @var int
     */
    private $IdentifiantEmploi;

    /**
     * @var int
     */
    private $IdentifiantEmploiModele;

    /**
     * @var bool
     */
    private $EnvoiDUEEdi;

    /**
     * @var bool
     */
    private $EnvoiDUEEdiSansCreerEmploi;

    /**
     * @var string
     */
    private $NomInterneEtablissement;

    /**
     * @var \DateTimeInterface
     */
    private $DateDebut;

    /**
     * @var \DateTimeInterface
     */
    private $DateFin;

    /**
     * @var string
     */
    private $CodeConventionCollective;

    /**
     * @var bool
     */
    private $bCodeConventionCollective;

    /**
     * @var string
     */
    private $CodeClassificationMetier;

    /**
     * @var bool
     */
    private $bCodeClassificationMetier;

    /**
     * @var string
     */
    private $IntituleEmploi;

    /**
     * @var bool
     */
    private $bIntituleEmploi;

    /**
     * @var string
     */
    private $CodeContratTravail;

    /**
     * @var bool
     */
    private $bCodeContratTravail;

    /**
     * @var string
     */
    private $MotifCDD;

    /**
     * @var bool
     */
    private $bMotifCDD;

    /**
     * @var int
     */
    private $DureeInitialeCDD;

    /**
     * @var bool
     */
    private $bDureeInitialeCDD;

    /**
     * @var string
     */
    private $MotifDebutEmploi;

    /**
     * @var bool
     */
    private $bMotifDebutEmploi;

    /**
     * @var string
     */
    private $MotifFinEmploi;

    /**
     * @var bool
     */
    private $bMotifFinEmploi;

    /**
     * @var string
     */
    private $CodeCaracteristiqueActivite;

    /**
     * @var bool
     */
    private $bCodeCaracteristiqueActivite;

    /**
     * @var string
     */
    private $CodeStatutProfessionnel;

    /**
     * @var bool
     */
    private $bCodeStatutProfessionnel;

    /**
     * @var string
     */
    private $CodeStatutCategoriel;

    /**
     * @var bool
     */
    private $bCodeStatutCategoriel;

    /**
     * @var string
     */
    private $CodeStatutCategorielAgircArrco;

    /**
     * @var bool
     */
    private $bCodeStatutCategorielAgircArrco;

    /**
     * @var string
     */
    private $Coefficient1;

    /**
     * @var bool
     */
    private $bCoefficient1;

    /**
     * @var string
     */
    private $Coefficient2;

    /**
     * @var bool
     */
    private $bCoefficient2;

    /**
     * @var string
     */
    private $Coefficient3;

    /**
     * @var bool
     */
    private $bCoefficient3;

    /**
     * @var string
     */
    private $Coefficient4;

    /**
     * @var bool
     */
    private $bCoefficient4;

    /**
     * @var string
     */
    private $CodeCSP;

    /**
     * @var bool
     */
    private $bCodeCSP;

    /**
     * @var string
     */
    private $CodeCPNDUC;

    /**
     * @var bool
     */
    private $bCodeCPNDUC;

    /**
     * @var string
     */
    private $SpectacleCodeEmploi;

    /**
     * @var bool
     */
    private $bSpectacleCodeEmploi;

    /**
     * @var string
     */
    private $SpectacleNumeroConges;

    /**
     * @var bool
     */
    private $bSpectacleNumeroConges;

    /**
     * @var float
     */
    private $PctAbattement;

    /**
     * @var bool
     */
    private $bPctAbattement;

    /**
     * @var bool
     */
    private $SalaireDeBaseEstHoraire;

    /**
     * @var bool
     */
    private $bSalaireDeBaseEstHoraire;

    /**
     * @var string
     */
    private $SalaireDeBase;

    /**
     * @var bool
     */
    private $bSalaireDeBase;

    /**
     * @var float
     */
    private $SalaireNetGaranti;

    /**
     * @var bool
     */
    private $bSalaireNetGaranti;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    private $NbHeuresTravaillees;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    private $NbHeuresDeNuitTravaillees;

    /**
     * @var bool
     */
    private $bNbHeuresTravaillees;

    /**
     * @var float
     */
    private $NbHeuresMensuellesNormales;

    /**
     * @var bool
     */
    private $bNbHeuresMensuellesNormales;

    /**
     * @var float
     */
    private $NbHeuresMensuellesMajorees;

    /**
     * @var bool
     */
    private $bNbHeuresMensuellesMajorees;

    /**
     * @var float
     */
    private $PctHeuresMensuellesMajorees;

    /**
     * @var bool
     */
    private $bPctHeuresMensuellesMajorees;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    private $NbHeuresMensuellesLibres;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $CodesHeuresMensuellesLibres;

    /**
     * @var bool
     */
    private $bHeuresMensuellesLibres;

    /**
     * @var bool
     */
    private $ConfirmationObligatoireDesHeures;

    /**
     * @var bool
     */
    private $bConfirmationObligatoireDesHeures;

    /**
     * @var bool
     */
    private $ActiverCalculKilometrique;

    /**
     * @var bool
     */
    private $bActiverCalculKilometrique;

    /**
     * @var int
     */
    private $TypeDeVehicule;

    /**
     * @var bool
     */
    private $bTypeDeVehicule;

    /**
     * @var int
     */
    private $TrancheKilometrique;

    /**
     * @var bool
     */
    private $bTrancheKilometrique;

    /**
     * @var float
     */
    private $PrixDuKilometre;

    /**
     * @var bool
     */
    private $bPrixDuKilometre;

    /**
     * @var bool
     */
    private $ActiverActiviteJournaliere;

    /**
     * @var bool
     */
    private $bActiverActiviteJournaliere;

    /**
     * @var int
     */
    private $DecoupageActiviteJournaliere;

    /**
     * @var bool
     */
    private $bDecoupageActiviteJournaliere;

    /**
     * @var int
     */
    private $ModeSaisieActiviteJournaliere;

    /**
     * @var bool
     */
    private $bModeSaisieActiviteJournaliere;

    /**
     * @var string
     */
    private $ExonerationCode;

    /**
     * @var bool
     */
    private $bExonerationCode;

    /**
     * @var \DateTimeInterface
     */
    private $ExonerationDebut;

    /**
     * @var bool
     */
    private $bExonerationDebut;

    /**
     * @var \DateTimeInterface
     */
    private $ExonerationFin;

    /**
     * @var bool
     */
    private $bExonerationFin;

    /**
     * @var float
     */
    private $ExonerationTaux;

    /**
     * @var bool
     */
    private $bExonerationTaux;

    /**
     * @var string
     */
    private $TitreTransportCode;

    /**
     * @var bool
     */
    private $bTitreTransportCode;

    /**
     * @var float
     */
    private $TitreTransportRemboursement;

    /**
     * @var bool
     */
    private $bTitreTransportRemboursement;

    /**
     * @var float
     */
    private $AutreTitreTransportMontant;

    /**
     * @var bool
     */
    private $bAutreTitreTransportMontant;

    /**
     * @var float
     */
    private $AutreTitreTransportRemboursement;

    /**
     * @var bool
     */
    private $bAutreTitreTransportRemboursement;

    /**
     * @var int
     */
    private $TicketRestaurant;

    /**
     * @var bool
     */
    private $bTicketRestaurant;

    /**
     * @return int
     */
    public function getIdentifiantEmploi()
    {
        return $this->IdentifiantEmploi;
    }

    /**
     * @param int $IdentifiantEmploi
     * @return CPAISWSEmploi
     */
    public function withIdentifiantEmploi($IdentifiantEmploi)
    {
        $new = clone $this;
        $new->IdentifiantEmploi = $IdentifiantEmploi;

        return $new;
    }

    /**
     * @return int
     */
    public function getIdentifiantEmploiModele()
    {
        return $this->IdentifiantEmploiModele;
    }

    /**
     * @param int $IdentifiantEmploiModele
     * @return CPAISWSEmploi
     */
    public function withIdentifiantEmploiModele($IdentifiantEmploiModele)
    {
        $new = clone $this;
        $new->IdentifiantEmploiModele = $IdentifiantEmploiModele;

        return $new;
    }

    /**
     * @return bool
     */
    public function getEnvoiDUEEdi()
    {
        return $this->EnvoiDUEEdi;
    }

    /**
     * @param bool $EnvoiDUEEdi
     * @return CPAISWSEmploi
     */
    public function withEnvoiDUEEdi($EnvoiDUEEdi)
    {
        $new = clone $this;
        $new->EnvoiDUEEdi = $EnvoiDUEEdi;

        return $new;
    }

    /**
     * @return bool
     */
    public function getEnvoiDUEEdiSansCreerEmploi()
    {
        return $this->EnvoiDUEEdiSansCreerEmploi;
    }

    /**
     * @param bool $EnvoiDUEEdiSansCreerEmploi
     * @return CPAISWSEmploi
     */
    public function withEnvoiDUEEdiSansCreerEmploi($EnvoiDUEEdiSansCreerEmploi)
    {
        $new = clone $this;
        $new->EnvoiDUEEdiSansCreerEmploi = $EnvoiDUEEdiSansCreerEmploi;

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
     * @return CPAISWSEmploi
     */
    public function withNomInterneEtablissement($NomInterneEtablissement)
    {
        $new = clone $this;
        $new->NomInterneEtablissement = $NomInterneEtablissement;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateDebut()
    {
        return $this->DateDebut;
    }

    /**
     * @param \DateTimeInterface $DateDebut
     * @return CPAISWSEmploi
     */
    public function withDateDebut($DateDebut)
    {
        $new = clone $this;
        $new->DateDebut = $DateDebut;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateFin()
    {
        return $this->DateFin;
    }

    /**
     * @param \DateTimeInterface $DateFin
     * @return CPAISWSEmploi
     */
    public function withDateFin($DateFin)
    {
        $new = clone $this;
        $new->DateFin = $DateFin;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeConventionCollective()
    {
        return $this->CodeConventionCollective;
    }

    /**
     * @param string $CodeConventionCollective
     * @return CPAISWSEmploi
     */
    public function withCodeConventionCollective($CodeConventionCollective)
    {
        $new = clone $this;
        $new->CodeConventionCollective = $CodeConventionCollective;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCodeConventionCollective()
    {
        return $this->bCodeConventionCollective;
    }

    /**
     * @param bool $bCodeConventionCollective
     * @return CPAISWSEmploi
     */
    public function withBCodeConventionCollective($bCodeConventionCollective)
    {
        $new = clone $this;
        $new->bCodeConventionCollective = $bCodeConventionCollective;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeClassificationMetier()
    {
        return $this->CodeClassificationMetier;
    }

    /**
     * @param string $CodeClassificationMetier
     * @return CPAISWSEmploi
     */
    public function withCodeClassificationMetier($CodeClassificationMetier)
    {
        $new = clone $this;
        $new->CodeClassificationMetier = $CodeClassificationMetier;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCodeClassificationMetier()
    {
        return $this->bCodeClassificationMetier;
    }

    /**
     * @param bool $bCodeClassificationMetier
     * @return CPAISWSEmploi
     */
    public function withBCodeClassificationMetier($bCodeClassificationMetier)
    {
        $new = clone $this;
        $new->bCodeClassificationMetier = $bCodeClassificationMetier;

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
     * @return CPAISWSEmploi
     */
    public function withIntituleEmploi($IntituleEmploi)
    {
        $new = clone $this;
        $new->IntituleEmploi = $IntituleEmploi;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBIntituleEmploi()
    {
        return $this->bIntituleEmploi;
    }

    /**
     * @param bool $bIntituleEmploi
     * @return CPAISWSEmploi
     */
    public function withBIntituleEmploi($bIntituleEmploi)
    {
        $new = clone $this;
        $new->bIntituleEmploi = $bIntituleEmploi;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeContratTravail()
    {
        return $this->CodeContratTravail;
    }

    /**
     * @param string $CodeContratTravail
     * @return CPAISWSEmploi
     */
    public function withCodeContratTravail($CodeContratTravail)
    {
        $new = clone $this;
        $new->CodeContratTravail = $CodeContratTravail;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCodeContratTravail()
    {
        return $this->bCodeContratTravail;
    }

    /**
     * @param bool $bCodeContratTravail
     * @return CPAISWSEmploi
     */
    public function withBCodeContratTravail($bCodeContratTravail)
    {
        $new = clone $this;
        $new->bCodeContratTravail = $bCodeContratTravail;

        return $new;
    }

    /**
     * @return string
     */
    public function getMotifCDD()
    {
        return $this->MotifCDD;
    }

    /**
     * @param string $MotifCDD
     * @return CPAISWSEmploi
     */
    public function withMotifCDD($MotifCDD)
    {
        $new = clone $this;
        $new->MotifCDD = $MotifCDD;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBMotifCDD()
    {
        return $this->bMotifCDD;
    }

    /**
     * @param bool $bMotifCDD
     * @return CPAISWSEmploi
     */
    public function withBMotifCDD($bMotifCDD)
    {
        $new = clone $this;
        $new->bMotifCDD = $bMotifCDD;

        return $new;
    }

    /**
     * @return int
     */
    public function getDureeInitialeCDD()
    {
        return $this->DureeInitialeCDD;
    }

    /**
     * @param int $DureeInitialeCDD
     * @return CPAISWSEmploi
     */
    public function withDureeInitialeCDD($DureeInitialeCDD)
    {
        $new = clone $this;
        $new->DureeInitialeCDD = $DureeInitialeCDD;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBDureeInitialeCDD()
    {
        return $this->bDureeInitialeCDD;
    }

    /**
     * @param bool $bDureeInitialeCDD
     * @return CPAISWSEmploi
     */
    public function withBDureeInitialeCDD($bDureeInitialeCDD)
    {
        $new = clone $this;
        $new->bDureeInitialeCDD = $bDureeInitialeCDD;

        return $new;
    }

    /**
     * @return string
     */
    public function getMotifDebutEmploi()
    {
        return $this->MotifDebutEmploi;
    }

    /**
     * @param string $MotifDebutEmploi
     * @return CPAISWSEmploi
     */
    public function withMotifDebutEmploi($MotifDebutEmploi)
    {
        $new = clone $this;
        $new->MotifDebutEmploi = $MotifDebutEmploi;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBMotifDebutEmploi()
    {
        return $this->bMotifDebutEmploi;
    }

    /**
     * @param bool $bMotifDebutEmploi
     * @return CPAISWSEmploi
     */
    public function withBMotifDebutEmploi($bMotifDebutEmploi)
    {
        $new = clone $this;
        $new->bMotifDebutEmploi = $bMotifDebutEmploi;

        return $new;
    }

    /**
     * @return string
     */
    public function getMotifFinEmploi()
    {
        return $this->MotifFinEmploi;
    }

    /**
     * @param string $MotifFinEmploi
     * @return CPAISWSEmploi
     */
    public function withMotifFinEmploi($MotifFinEmploi)
    {
        $new = clone $this;
        $new->MotifFinEmploi = $MotifFinEmploi;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBMotifFinEmploi()
    {
        return $this->bMotifFinEmploi;
    }

    /**
     * @param bool $bMotifFinEmploi
     * @return CPAISWSEmploi
     */
    public function withBMotifFinEmploi($bMotifFinEmploi)
    {
        $new = clone $this;
        $new->bMotifFinEmploi = $bMotifFinEmploi;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeCaracteristiqueActivite()
    {
        return $this->CodeCaracteristiqueActivite;
    }

    /**
     * @param string $CodeCaracteristiqueActivite
     * @return CPAISWSEmploi
     */
    public function withCodeCaracteristiqueActivite($CodeCaracteristiqueActivite)
    {
        $new = clone $this;
        $new->CodeCaracteristiqueActivite = $CodeCaracteristiqueActivite;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCodeCaracteristiqueActivite()
    {
        return $this->bCodeCaracteristiqueActivite;
    }

    /**
     * @param bool $bCodeCaracteristiqueActivite
     * @return CPAISWSEmploi
     */
    public function withBCodeCaracteristiqueActivite($bCodeCaracteristiqueActivite)
    {
        $new = clone $this;
        $new->bCodeCaracteristiqueActivite = $bCodeCaracteristiqueActivite;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeStatutProfessionnel()
    {
        return $this->CodeStatutProfessionnel;
    }

    /**
     * @param string $CodeStatutProfessionnel
     * @return CPAISWSEmploi
     */
    public function withCodeStatutProfessionnel($CodeStatutProfessionnel)
    {
        $new = clone $this;
        $new->CodeStatutProfessionnel = $CodeStatutProfessionnel;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCodeStatutProfessionnel()
    {
        return $this->bCodeStatutProfessionnel;
    }

    /**
     * @param bool $bCodeStatutProfessionnel
     * @return CPAISWSEmploi
     */
    public function withBCodeStatutProfessionnel($bCodeStatutProfessionnel)
    {
        $new = clone $this;
        $new->bCodeStatutProfessionnel = $bCodeStatutProfessionnel;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeStatutCategoriel()
    {
        return $this->CodeStatutCategoriel;
    }

    /**
     * @param string $CodeStatutCategoriel
     * @return CPAISWSEmploi
     */
    public function withCodeStatutCategoriel($CodeStatutCategoriel)
    {
        $new = clone $this;
        $new->CodeStatutCategoriel = $CodeStatutCategoriel;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCodeStatutCategoriel()
    {
        return $this->bCodeStatutCategoriel;
    }

    /**
     * @param bool $bCodeStatutCategoriel
     * @return CPAISWSEmploi
     */
    public function withBCodeStatutCategoriel($bCodeStatutCategoriel)
    {
        $new = clone $this;
        $new->bCodeStatutCategoriel = $bCodeStatutCategoriel;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeStatutCategorielAgircArrco()
    {
        return $this->CodeStatutCategorielAgircArrco;
    }

    /**
     * @param string $CodeStatutCategorielAgircArrco
     * @return CPAISWSEmploi
     */
    public function withCodeStatutCategorielAgircArrco($CodeStatutCategorielAgircArrco)
    {
        $new = clone $this;
        $new->CodeStatutCategorielAgircArrco = $CodeStatutCategorielAgircArrco;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCodeStatutCategorielAgircArrco()
    {
        return $this->bCodeStatutCategorielAgircArrco;
    }

    /**
     * @param bool $bCodeStatutCategorielAgircArrco
     * @return CPAISWSEmploi
     */
    public function withBCodeStatutCategorielAgircArrco($bCodeStatutCategorielAgircArrco)
    {
        $new = clone $this;
        $new->bCodeStatutCategorielAgircArrco = $bCodeStatutCategorielAgircArrco;

        return $new;
    }

    /**
     * @return string
     */
    public function getCoefficient1()
    {
        return $this->Coefficient1;
    }

    /**
     * @param string $Coefficient1
     * @return CPAISWSEmploi
     */
    public function withCoefficient1($Coefficient1)
    {
        $new = clone $this;
        $new->Coefficient1 = $Coefficient1;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCoefficient1()
    {
        return $this->bCoefficient1;
    }

    /**
     * @param bool $bCoefficient1
     * @return CPAISWSEmploi
     */
    public function withBCoefficient1($bCoefficient1)
    {
        $new = clone $this;
        $new->bCoefficient1 = $bCoefficient1;

        return $new;
    }

    /**
     * @return string
     */
    public function getCoefficient2()
    {
        return $this->Coefficient2;
    }

    /**
     * @param string $Coefficient2
     * @return CPAISWSEmploi
     */
    public function withCoefficient2($Coefficient2)
    {
        $new = clone $this;
        $new->Coefficient2 = $Coefficient2;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCoefficient2()
    {
        return $this->bCoefficient2;
    }

    /**
     * @param bool $bCoefficient2
     * @return CPAISWSEmploi
     */
    public function withBCoefficient2($bCoefficient2)
    {
        $new = clone $this;
        $new->bCoefficient2 = $bCoefficient2;

        return $new;
    }

    /**
     * @return string
     */
    public function getCoefficient3()
    {
        return $this->Coefficient3;
    }

    /**
     * @param string $Coefficient3
     * @return CPAISWSEmploi
     */
    public function withCoefficient3($Coefficient3)
    {
        $new = clone $this;
        $new->Coefficient3 = $Coefficient3;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCoefficient3()
    {
        return $this->bCoefficient3;
    }

    /**
     * @param bool $bCoefficient3
     * @return CPAISWSEmploi
     */
    public function withBCoefficient3($bCoefficient3)
    {
        $new = clone $this;
        $new->bCoefficient3 = $bCoefficient3;

        return $new;
    }

    /**
     * @return string
     */
    public function getCoefficient4()
    {
        return $this->Coefficient4;
    }

    /**
     * @param string $Coefficient4
     * @return CPAISWSEmploi
     */
    public function withCoefficient4($Coefficient4)
    {
        $new = clone $this;
        $new->Coefficient4 = $Coefficient4;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCoefficient4()
    {
        return $this->bCoefficient4;
    }

    /**
     * @param bool $bCoefficient4
     * @return CPAISWSEmploi
     */
    public function withBCoefficient4($bCoefficient4)
    {
        $new = clone $this;
        $new->bCoefficient4 = $bCoefficient4;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeCSP()
    {
        return $this->CodeCSP;
    }

    /**
     * @param string $CodeCSP
     * @return CPAISWSEmploi
     */
    public function withCodeCSP($CodeCSP)
    {
        $new = clone $this;
        $new->CodeCSP = $CodeCSP;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCodeCSP()
    {
        return $this->bCodeCSP;
    }

    /**
     * @param bool $bCodeCSP
     * @return CPAISWSEmploi
     */
    public function withBCodeCSP($bCodeCSP)
    {
        $new = clone $this;
        $new->bCodeCSP = $bCodeCSP;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeCPNDUC()
    {
        return $this->CodeCPNDUC;
    }

    /**
     * @param string $CodeCPNDUC
     * @return CPAISWSEmploi
     */
    public function withCodeCPNDUC($CodeCPNDUC)
    {
        $new = clone $this;
        $new->CodeCPNDUC = $CodeCPNDUC;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCodeCPNDUC()
    {
        return $this->bCodeCPNDUC;
    }

    /**
     * @param bool $bCodeCPNDUC
     * @return CPAISWSEmploi
     */
    public function withBCodeCPNDUC($bCodeCPNDUC)
    {
        $new = clone $this;
        $new->bCodeCPNDUC = $bCodeCPNDUC;

        return $new;
    }

    /**
     * @return string
     */
    public function getSpectacleCodeEmploi()
    {
        return $this->SpectacleCodeEmploi;
    }

    /**
     * @param string $SpectacleCodeEmploi
     * @return CPAISWSEmploi
     */
    public function withSpectacleCodeEmploi($SpectacleCodeEmploi)
    {
        $new = clone $this;
        $new->SpectacleCodeEmploi = $SpectacleCodeEmploi;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBSpectacleCodeEmploi()
    {
        return $this->bSpectacleCodeEmploi;
    }

    /**
     * @param bool $bSpectacleCodeEmploi
     * @return CPAISWSEmploi
     */
    public function withBSpectacleCodeEmploi($bSpectacleCodeEmploi)
    {
        $new = clone $this;
        $new->bSpectacleCodeEmploi = $bSpectacleCodeEmploi;

        return $new;
    }

    /**
     * @return string
     */
    public function getSpectacleNumeroConges()
    {
        return $this->SpectacleNumeroConges;
    }

    /**
     * @param string $SpectacleNumeroConges
     * @return CPAISWSEmploi
     */
    public function withSpectacleNumeroConges($SpectacleNumeroConges)
    {
        $new = clone $this;
        $new->SpectacleNumeroConges = $SpectacleNumeroConges;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBSpectacleNumeroConges()
    {
        return $this->bSpectacleNumeroConges;
    }

    /**
     * @param bool $bSpectacleNumeroConges
     * @return CPAISWSEmploi
     */
    public function withBSpectacleNumeroConges($bSpectacleNumeroConges)
    {
        $new = clone $this;
        $new->bSpectacleNumeroConges = $bSpectacleNumeroConges;

        return $new;
    }

    /**
     * @return float
     */
    public function getPctAbattement()
    {
        return $this->PctAbattement;
    }

    /**
     * @param float $PctAbattement
     * @return CPAISWSEmploi
     */
    public function withPctAbattement($PctAbattement)
    {
        $new = clone $this;
        $new->PctAbattement = $PctAbattement;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBPctAbattement()
    {
        return $this->bPctAbattement;
    }

    /**
     * @param bool $bPctAbattement
     * @return CPAISWSEmploi
     */
    public function withBPctAbattement($bPctAbattement)
    {
        $new = clone $this;
        $new->bPctAbattement = $bPctAbattement;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSalaireDeBaseEstHoraire()
    {
        return $this->SalaireDeBaseEstHoraire;
    }

    /**
     * @param bool $SalaireDeBaseEstHoraire
     * @return CPAISWSEmploi
     */
    public function withSalaireDeBaseEstHoraire($SalaireDeBaseEstHoraire)
    {
        $new = clone $this;
        $new->SalaireDeBaseEstHoraire = $SalaireDeBaseEstHoraire;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBSalaireDeBaseEstHoraire()
    {
        return $this->bSalaireDeBaseEstHoraire;
    }

    /**
     * @param bool $bSalaireDeBaseEstHoraire
     * @return CPAISWSEmploi
     */
    public function withBSalaireDeBaseEstHoraire($bSalaireDeBaseEstHoraire)
    {
        $new = clone $this;
        $new->bSalaireDeBaseEstHoraire = $bSalaireDeBaseEstHoraire;

        return $new;
    }

    /**
     * @return string
     */
    public function getSalaireDeBase()
    {
        return $this->SalaireDeBase;
    }

    /**
     * @param string $SalaireDeBase
     * @return CPAISWSEmploi
     */
    public function withSalaireDeBase($SalaireDeBase)
    {
        $new = clone $this;
        $new->SalaireDeBase = $SalaireDeBase;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBSalaireDeBase()
    {
        return $this->bSalaireDeBase;
    }

    /**
     * @param bool $bSalaireDeBase
     * @return CPAISWSEmploi
     */
    public function withBSalaireDeBase($bSalaireDeBase)
    {
        $new = clone $this;
        $new->bSalaireDeBase = $bSalaireDeBase;

        return $new;
    }

    /**
     * @return float
     */
    public function getSalaireNetGaranti()
    {
        return $this->SalaireNetGaranti;
    }

    /**
     * @param float $SalaireNetGaranti
     * @return CPAISWSEmploi
     */
    public function withSalaireNetGaranti($SalaireNetGaranti)
    {
        $new = clone $this;
        $new->SalaireNetGaranti = $SalaireNetGaranti;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBSalaireNetGaranti()
    {
        return $this->bSalaireNetGaranti;
    }

    /**
     * @param bool $bSalaireNetGaranti
     * @return CPAISWSEmploi
     */
    public function withBSalaireNetGaranti($bSalaireNetGaranti)
    {
        $new = clone $this;
        $new->bSalaireNetGaranti = $bSalaireNetGaranti;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    public function getNbHeuresTravaillees()
    {
        return $this->NbHeuresTravaillees;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble $NbHeuresTravaillees
     * @return CPAISWSEmploi
     */
    public function withNbHeuresTravaillees($NbHeuresTravaillees)
    {
        $new = clone $this;
        $new->NbHeuresTravaillees = $NbHeuresTravaillees;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    public function getNbHeuresDeNuitTravaillees()
    {
        return $this->NbHeuresDeNuitTravaillees;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble $NbHeuresDeNuitTravaillees
     * @return CPAISWSEmploi
     */
    public function withNbHeuresDeNuitTravaillees($NbHeuresDeNuitTravaillees)
    {
        $new = clone $this;
        $new->NbHeuresDeNuitTravaillees = $NbHeuresDeNuitTravaillees;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBNbHeuresTravaillees()
    {
        return $this->bNbHeuresTravaillees;
    }

    /**
     * @param bool $bNbHeuresTravaillees
     * @return CPAISWSEmploi
     */
    public function withBNbHeuresTravaillees($bNbHeuresTravaillees)
    {
        $new = clone $this;
        $new->bNbHeuresTravaillees = $bNbHeuresTravaillees;

        return $new;
    }

    /**
     * @return float
     */
    public function getNbHeuresMensuellesNormales()
    {
        return $this->NbHeuresMensuellesNormales;
    }

    /**
     * @param float $NbHeuresMensuellesNormales
     * @return CPAISWSEmploi
     */
    public function withNbHeuresMensuellesNormales($NbHeuresMensuellesNormales)
    {
        $new = clone $this;
        $new->NbHeuresMensuellesNormales = $NbHeuresMensuellesNormales;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBNbHeuresMensuellesNormales()
    {
        return $this->bNbHeuresMensuellesNormales;
    }

    /**
     * @param bool $bNbHeuresMensuellesNormales
     * @return CPAISWSEmploi
     */
    public function withBNbHeuresMensuellesNormales($bNbHeuresMensuellesNormales)
    {
        $new = clone $this;
        $new->bNbHeuresMensuellesNormales = $bNbHeuresMensuellesNormales;

        return $new;
    }

    /**
     * @return float
     */
    public function getNbHeuresMensuellesMajorees()
    {
        return $this->NbHeuresMensuellesMajorees;
    }

    /**
     * @param float $NbHeuresMensuellesMajorees
     * @return CPAISWSEmploi
     */
    public function withNbHeuresMensuellesMajorees($NbHeuresMensuellesMajorees)
    {
        $new = clone $this;
        $new->NbHeuresMensuellesMajorees = $NbHeuresMensuellesMajorees;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBNbHeuresMensuellesMajorees()
    {
        return $this->bNbHeuresMensuellesMajorees;
    }

    /**
     * @param bool $bNbHeuresMensuellesMajorees
     * @return CPAISWSEmploi
     */
    public function withBNbHeuresMensuellesMajorees($bNbHeuresMensuellesMajorees)
    {
        $new = clone $this;
        $new->bNbHeuresMensuellesMajorees = $bNbHeuresMensuellesMajorees;

        return $new;
    }

    /**
     * @return float
     */
    public function getPctHeuresMensuellesMajorees()
    {
        return $this->PctHeuresMensuellesMajorees;
    }

    /**
     * @param float $PctHeuresMensuellesMajorees
     * @return CPAISWSEmploi
     */
    public function withPctHeuresMensuellesMajorees($PctHeuresMensuellesMajorees)
    {
        $new = clone $this;
        $new->PctHeuresMensuellesMajorees = $PctHeuresMensuellesMajorees;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBPctHeuresMensuellesMajorees()
    {
        return $this->bPctHeuresMensuellesMajorees;
    }

    /**
     * @param bool $bPctHeuresMensuellesMajorees
     * @return CPAISWSEmploi
     */
    public function withBPctHeuresMensuellesMajorees($bPctHeuresMensuellesMajorees)
    {
        $new = clone $this;
        $new->bPctHeuresMensuellesMajorees = $bPctHeuresMensuellesMajorees;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    public function getNbHeuresMensuellesLibres()
    {
        return $this->NbHeuresMensuellesLibres;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble $NbHeuresMensuellesLibres
     * @return CPAISWSEmploi
     */
    public function withNbHeuresMensuellesLibres($NbHeuresMensuellesLibres)
    {
        $new = clone $this;
        $new->NbHeuresMensuellesLibres = $NbHeuresMensuellesLibres;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getCodesHeuresMensuellesLibres()
    {
        return $this->CodesHeuresMensuellesLibres;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $CodesHeuresMensuellesLibres
     * @return CPAISWSEmploi
     */
    public function withCodesHeuresMensuellesLibres($CodesHeuresMensuellesLibres)
    {
        $new = clone $this;
        $new->CodesHeuresMensuellesLibres = $CodesHeuresMensuellesLibres;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBHeuresMensuellesLibres()
    {
        return $this->bHeuresMensuellesLibres;
    }

    /**
     * @param bool $bHeuresMensuellesLibres
     * @return CPAISWSEmploi
     */
    public function withBHeuresMensuellesLibres($bHeuresMensuellesLibres)
    {
        $new = clone $this;
        $new->bHeuresMensuellesLibres = $bHeuresMensuellesLibres;

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
     * @return CPAISWSEmploi
     */
    public function withConfirmationObligatoireDesHeures($ConfirmationObligatoireDesHeures)
    {
        $new = clone $this;
        $new->ConfirmationObligatoireDesHeures = $ConfirmationObligatoireDesHeures;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBConfirmationObligatoireDesHeures()
    {
        return $this->bConfirmationObligatoireDesHeures;
    }

    /**
     * @param bool $bConfirmationObligatoireDesHeures
     * @return CPAISWSEmploi
     */
    public function withBConfirmationObligatoireDesHeures($bConfirmationObligatoireDesHeures)
    {
        $new = clone $this;
        $new->bConfirmationObligatoireDesHeures = $bConfirmationObligatoireDesHeures;

        return $new;
    }

    /**
     * @return bool
     */
    public function getActiverCalculKilometrique()
    {
        return $this->ActiverCalculKilometrique;
    }

    /**
     * @param bool $ActiverCalculKilometrique
     * @return CPAISWSEmploi
     */
    public function withActiverCalculKilometrique($ActiverCalculKilometrique)
    {
        $new = clone $this;
        $new->ActiverCalculKilometrique = $ActiverCalculKilometrique;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBActiverCalculKilometrique()
    {
        return $this->bActiverCalculKilometrique;
    }

    /**
     * @param bool $bActiverCalculKilometrique
     * @return CPAISWSEmploi
     */
    public function withBActiverCalculKilometrique($bActiverCalculKilometrique)
    {
        $new = clone $this;
        $new->bActiverCalculKilometrique = $bActiverCalculKilometrique;

        return $new;
    }

    /**
     * @return int
     */
    public function getTypeDeVehicule()
    {
        return $this->TypeDeVehicule;
    }

    /**
     * @param int $TypeDeVehicule
     * @return CPAISWSEmploi
     */
    public function withTypeDeVehicule($TypeDeVehicule)
    {
        $new = clone $this;
        $new->TypeDeVehicule = $TypeDeVehicule;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBTypeDeVehicule()
    {
        return $this->bTypeDeVehicule;
    }

    /**
     * @param bool $bTypeDeVehicule
     * @return CPAISWSEmploi
     */
    public function withBTypeDeVehicule($bTypeDeVehicule)
    {
        $new = clone $this;
        $new->bTypeDeVehicule = $bTypeDeVehicule;

        return $new;
    }

    /**
     * @return int
     */
    public function getTrancheKilometrique()
    {
        return $this->TrancheKilometrique;
    }

    /**
     * @param int $TrancheKilometrique
     * @return CPAISWSEmploi
     */
    public function withTrancheKilometrique($TrancheKilometrique)
    {
        $new = clone $this;
        $new->TrancheKilometrique = $TrancheKilometrique;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBTrancheKilometrique()
    {
        return $this->bTrancheKilometrique;
    }

    /**
     * @param bool $bTrancheKilometrique
     * @return CPAISWSEmploi
     */
    public function withBTrancheKilometrique($bTrancheKilometrique)
    {
        $new = clone $this;
        $new->bTrancheKilometrique = $bTrancheKilometrique;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrixDuKilometre()
    {
        return $this->PrixDuKilometre;
    }

    /**
     * @param float $PrixDuKilometre
     * @return CPAISWSEmploi
     */
    public function withPrixDuKilometre($PrixDuKilometre)
    {
        $new = clone $this;
        $new->PrixDuKilometre = $PrixDuKilometre;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBPrixDuKilometre()
    {
        return $this->bPrixDuKilometre;
    }

    /**
     * @param bool $bPrixDuKilometre
     * @return CPAISWSEmploi
     */
    public function withBPrixDuKilometre($bPrixDuKilometre)
    {
        $new = clone $this;
        $new->bPrixDuKilometre = $bPrixDuKilometre;

        return $new;
    }

    /**
     * @return bool
     */
    public function getActiverActiviteJournaliere()
    {
        return $this->ActiverActiviteJournaliere;
    }

    /**
     * @param bool $ActiverActiviteJournaliere
     * @return CPAISWSEmploi
     */
    public function withActiverActiviteJournaliere($ActiverActiviteJournaliere)
    {
        $new = clone $this;
        $new->ActiverActiviteJournaliere = $ActiverActiviteJournaliere;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBActiverActiviteJournaliere()
    {
        return $this->bActiverActiviteJournaliere;
    }

    /**
     * @param bool $bActiverActiviteJournaliere
     * @return CPAISWSEmploi
     */
    public function withBActiverActiviteJournaliere($bActiverActiviteJournaliere)
    {
        $new = clone $this;
        $new->bActiverActiviteJournaliere = $bActiverActiviteJournaliere;

        return $new;
    }

    /**
     * @return int
     */
    public function getDecoupageActiviteJournaliere()
    {
        return $this->DecoupageActiviteJournaliere;
    }

    /**
     * @param int $DecoupageActiviteJournaliere
     * @return CPAISWSEmploi
     */
    public function withDecoupageActiviteJournaliere($DecoupageActiviteJournaliere)
    {
        $new = clone $this;
        $new->DecoupageActiviteJournaliere = $DecoupageActiviteJournaliere;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBDecoupageActiviteJournaliere()
    {
        return $this->bDecoupageActiviteJournaliere;
    }

    /**
     * @param bool $bDecoupageActiviteJournaliere
     * @return CPAISWSEmploi
     */
    public function withBDecoupageActiviteJournaliere($bDecoupageActiviteJournaliere)
    {
        $new = clone $this;
        $new->bDecoupageActiviteJournaliere = $bDecoupageActiviteJournaliere;

        return $new;
    }

    /**
     * @return int
     */
    public function getModeSaisieActiviteJournaliere()
    {
        return $this->ModeSaisieActiviteJournaliere;
    }

    /**
     * @param int $ModeSaisieActiviteJournaliere
     * @return CPAISWSEmploi
     */
    public function withModeSaisieActiviteJournaliere($ModeSaisieActiviteJournaliere)
    {
        $new = clone $this;
        $new->ModeSaisieActiviteJournaliere = $ModeSaisieActiviteJournaliere;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBModeSaisieActiviteJournaliere()
    {
        return $this->bModeSaisieActiviteJournaliere;
    }

    /**
     * @param bool $bModeSaisieActiviteJournaliere
     * @return CPAISWSEmploi
     */
    public function withBModeSaisieActiviteJournaliere($bModeSaisieActiviteJournaliere)
    {
        $new = clone $this;
        $new->bModeSaisieActiviteJournaliere = $bModeSaisieActiviteJournaliere;

        return $new;
    }

    /**
     * @return string
     */
    public function getExonerationCode()
    {
        return $this->ExonerationCode;
    }

    /**
     * @param string $ExonerationCode
     * @return CPAISWSEmploi
     */
    public function withExonerationCode($ExonerationCode)
    {
        $new = clone $this;
        $new->ExonerationCode = $ExonerationCode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBExonerationCode()
    {
        return $this->bExonerationCode;
    }

    /**
     * @param bool $bExonerationCode
     * @return CPAISWSEmploi
     */
    public function withBExonerationCode($bExonerationCode)
    {
        $new = clone $this;
        $new->bExonerationCode = $bExonerationCode;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getExonerationDebut()
    {
        return $this->ExonerationDebut;
    }

    /**
     * @param \DateTimeInterface $ExonerationDebut
     * @return CPAISWSEmploi
     */
    public function withExonerationDebut($ExonerationDebut)
    {
        $new = clone $this;
        $new->ExonerationDebut = $ExonerationDebut;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBExonerationDebut()
    {
        return $this->bExonerationDebut;
    }

    /**
     * @param bool $bExonerationDebut
     * @return CPAISWSEmploi
     */
    public function withBExonerationDebut($bExonerationDebut)
    {
        $new = clone $this;
        $new->bExonerationDebut = $bExonerationDebut;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getExonerationFin()
    {
        return $this->ExonerationFin;
    }

    /**
     * @param \DateTimeInterface $ExonerationFin
     * @return CPAISWSEmploi
     */
    public function withExonerationFin($ExonerationFin)
    {
        $new = clone $this;
        $new->ExonerationFin = $ExonerationFin;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBExonerationFin()
    {
        return $this->bExonerationFin;
    }

    /**
     * @param bool $bExonerationFin
     * @return CPAISWSEmploi
     */
    public function withBExonerationFin($bExonerationFin)
    {
        $new = clone $this;
        $new->bExonerationFin = $bExonerationFin;

        return $new;
    }

    /**
     * @return float
     */
    public function getExonerationTaux()
    {
        return $this->ExonerationTaux;
    }

    /**
     * @param float $ExonerationTaux
     * @return CPAISWSEmploi
     */
    public function withExonerationTaux($ExonerationTaux)
    {
        $new = clone $this;
        $new->ExonerationTaux = $ExonerationTaux;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBExonerationTaux()
    {
        return $this->bExonerationTaux;
    }

    /**
     * @param bool $bExonerationTaux
     * @return CPAISWSEmploi
     */
    public function withBExonerationTaux($bExonerationTaux)
    {
        $new = clone $this;
        $new->bExonerationTaux = $bExonerationTaux;

        return $new;
    }

    /**
     * @return string
     */
    public function getTitreTransportCode()
    {
        return $this->TitreTransportCode;
    }

    /**
     * @param string $TitreTransportCode
     * @return CPAISWSEmploi
     */
    public function withTitreTransportCode($TitreTransportCode)
    {
        $new = clone $this;
        $new->TitreTransportCode = $TitreTransportCode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBTitreTransportCode()
    {
        return $this->bTitreTransportCode;
    }

    /**
     * @param bool $bTitreTransportCode
     * @return CPAISWSEmploi
     */
    public function withBTitreTransportCode($bTitreTransportCode)
    {
        $new = clone $this;
        $new->bTitreTransportCode = $bTitreTransportCode;

        return $new;
    }

    /**
     * @return float
     */
    public function getTitreTransportRemboursement()
    {
        return $this->TitreTransportRemboursement;
    }

    /**
     * @param float $TitreTransportRemboursement
     * @return CPAISWSEmploi
     */
    public function withTitreTransportRemboursement($TitreTransportRemboursement)
    {
        $new = clone $this;
        $new->TitreTransportRemboursement = $TitreTransportRemboursement;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBTitreTransportRemboursement()
    {
        return $this->bTitreTransportRemboursement;
    }

    /**
     * @param bool $bTitreTransportRemboursement
     * @return CPAISWSEmploi
     */
    public function withBTitreTransportRemboursement($bTitreTransportRemboursement)
    {
        $new = clone $this;
        $new->bTitreTransportRemboursement = $bTitreTransportRemboursement;

        return $new;
    }

    /**
     * @return float
     */
    public function getAutreTitreTransportMontant()
    {
        return $this->AutreTitreTransportMontant;
    }

    /**
     * @param float $AutreTitreTransportMontant
     * @return CPAISWSEmploi
     */
    public function withAutreTitreTransportMontant($AutreTitreTransportMontant)
    {
        $new = clone $this;
        $new->AutreTitreTransportMontant = $AutreTitreTransportMontant;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBAutreTitreTransportMontant()
    {
        return $this->bAutreTitreTransportMontant;
    }

    /**
     * @param bool $bAutreTitreTransportMontant
     * @return CPAISWSEmploi
     */
    public function withBAutreTitreTransportMontant($bAutreTitreTransportMontant)
    {
        $new = clone $this;
        $new->bAutreTitreTransportMontant = $bAutreTitreTransportMontant;

        return $new;
    }

    /**
     * @return float
     */
    public function getAutreTitreTransportRemboursement()
    {
        return $this->AutreTitreTransportRemboursement;
    }

    /**
     * @param float $AutreTitreTransportRemboursement
     * @return CPAISWSEmploi
     */
    public function withAutreTitreTransportRemboursement($AutreTitreTransportRemboursement)
    {
        $new = clone $this;
        $new->AutreTitreTransportRemboursement = $AutreTitreTransportRemboursement;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBAutreTitreTransportRemboursement()
    {
        return $this->bAutreTitreTransportRemboursement;
    }

    /**
     * @param bool $bAutreTitreTransportRemboursement
     * @return CPAISWSEmploi
     */
    public function withBAutreTitreTransportRemboursement($bAutreTitreTransportRemboursement)
    {
        $new = clone $this;
        $new->bAutreTitreTransportRemboursement = $bAutreTitreTransportRemboursement;

        return $new;
    }

    /**
     * @return int
     */
    public function getTicketRestaurant()
    {
        return $this->TicketRestaurant;
    }

    /**
     * @param int $TicketRestaurant
     * @return CPAISWSEmploi
     */
    public function withTicketRestaurant($TicketRestaurant)
    {
        $new = clone $this;
        $new->TicketRestaurant = $TicketRestaurant;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBTicketRestaurant()
    {
        return $this->bTicketRestaurant;
    }

    /**
     * @param bool $bTicketRestaurant
     * @return CPAISWSEmploi
     */
    public function withBTicketRestaurant($bTicketRestaurant)
    {
        $new = clone $this;
        $new->bTicketRestaurant = $bTicketRestaurant;

        return $new;
    }
}

