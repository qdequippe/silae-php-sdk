<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSpectacleSalarieAffectation
{
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
    private $NumeroObjet;

    /**
     * @var string
     */
    private $ReferenceExterneSpectacle;

    /**
     * @var bool
     */
    private $AEMInitiale;

    /**
     * @var bool
     */
    private $AEMComplementaire;

    /**
     * @var \DateTimeInterface
     */
    private $DateDebut_AEMInitiale;

    /**
     * @var \DateTimeInterface
     */
    private $DateFin_AEMInitiale;

    /**
     * @var bool
     */
    private $DocsFinContrat;

    /**
     * @var float
     */
    private $TauxHoraire;

    /**
     * @var float
     */
    private $NbH;

    /**
     * @var float
     */
    private $NbCachets;

    /**
     * @var float
     */
    private $PuCachet;

    /**
     * @var int
     */
    private $TypeCachet;

    /**
     * @var bool
     */
    private $MontantNet;

    /**
     * @var bool
     */
    private $MontantCoutGlobal;

    /**
     * @var float
     */
    private $NbJours;

    /**
     * @var float
     */
    private $NbHRepet;

    /**
     * @var float
     */
    private $MtHRepet;

    /**
     * @var string
     */
    private $HLibreCode1;

    /**
     * @var float
     */
    private $HLibreValeur1;

    /**
     * @var string
     */
    private $HLibreCode2;

    /**
     * @var float
     */
    private $HLibreValeur2;

    /**
     * @var string
     */
    private $HLibreCode3;

    /**
     * @var float
     */
    private $HLibreValeur3;

    /**
     * @var string
     */
    private $HLibreCode4;

    /**
     * @var float
     */
    private $HLibreValeur4;

    /**
     * @var string
     */
    private $HLibreCode5;

    /**
     * @var float
     */
    private $HLibreValeur5;

    /**
     * @var string
     */
    private $HLibreCode6;

    /**
     * @var float
     */
    private $HLibreValeur6;

    /**
     * @var string
     */
    private $VariableCode1;

    /**
     * @var float
     */
    private $VariableValeur1;

    /**
     * @var string
     */
    private $VariableCode2;

    /**
     * @var float
     */
    private $VariableValeur2;

    /**
     * @var string
     */
    private $VariableCode3;

    /**
     * @var float
     */
    private $VariableValeur3;

    /**
     * @var string
     */
    private $VariableCode4;

    /**
     * @var float
     */
    private $VariableValeur4;

    /**
     * @var string
     */
    private $VariableCode5;

    /**
     * @var float
     */
    private $VariableValeur5;

    /**
     * @var string
     */
    private $VariableCode6;

    /**
     * @var float
     */
    private $VariableValeur6;

    /**
     * @var string
     */
    private $VariableCode7;

    /**
     * @var float
     */
    private $VariableValeur7;

    /**
     * @var string
     */
    private $VariableCode8;

    /**
     * @var float
     */
    private $VariableValeur8;

    /**
     * @var string
     */
    private $VariableCode9;

    /**
     * @var float
     */
    private $VariableValeur9;

    /**
     * @var string
     */
    private $AffectationAnalytique;

    /**
     * @var string
     */
    private $AffectationAnalytique2;

    /**
     * @var string
     */
    private $AffectationAnalytique3;

    /**
     * @return \DateTimeInterface
     */
    public function getDateDebut()
    {
        return $this->DateDebut;
    }

    /**
     * @param \DateTimeInterface $DateDebut
     * @return CPAISWSSpectacleSalarieAffectation
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
     * @return CPAISWSSpectacleSalarieAffectation
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
    public function getNumeroObjet()
    {
        return $this->NumeroObjet;
    }

    /**
     * @param string $NumeroObjet
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withNumeroObjet($NumeroObjet)
    {
        $new = clone $this;
        $new->NumeroObjet = $NumeroObjet;

        return $new;
    }

    /**
     * @return string
     */
    public function getReferenceExterneSpectacle()
    {
        return $this->ReferenceExterneSpectacle;
    }

    /**
     * @param string $ReferenceExterneSpectacle
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withReferenceExterneSpectacle($ReferenceExterneSpectacle)
    {
        $new = clone $this;
        $new->ReferenceExterneSpectacle = $ReferenceExterneSpectacle;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAEMInitiale()
    {
        return $this->AEMInitiale;
    }

    /**
     * @param bool $AEMInitiale
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withAEMInitiale($AEMInitiale)
    {
        $new = clone $this;
        $new->AEMInitiale = $AEMInitiale;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAEMComplementaire()
    {
        return $this->AEMComplementaire;
    }

    /**
     * @param bool $AEMComplementaire
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withAEMComplementaire($AEMComplementaire)
    {
        $new = clone $this;
        $new->AEMComplementaire = $AEMComplementaire;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateDebut_AEMInitiale()
    {
        return $this->DateDebut_AEMInitiale;
    }

    /**
     * @param \DateTimeInterface $DateDebut_AEMInitiale
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withDateDebut_AEMInitiale($DateDebut_AEMInitiale)
    {
        $new = clone $this;
        $new->DateDebut_AEMInitiale = $DateDebut_AEMInitiale;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateFin_AEMInitiale()
    {
        return $this->DateFin_AEMInitiale;
    }

    /**
     * @param \DateTimeInterface $DateFin_AEMInitiale
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withDateFin_AEMInitiale($DateFin_AEMInitiale)
    {
        $new = clone $this;
        $new->DateFin_AEMInitiale = $DateFin_AEMInitiale;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDocsFinContrat()
    {
        return $this->DocsFinContrat;
    }

    /**
     * @param bool $DocsFinContrat
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withDocsFinContrat($DocsFinContrat)
    {
        $new = clone $this;
        $new->DocsFinContrat = $DocsFinContrat;

        return $new;
    }

    /**
     * @return float
     */
    public function getTauxHoraire()
    {
        return $this->TauxHoraire;
    }

    /**
     * @param float $TauxHoraire
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withTauxHoraire($TauxHoraire)
    {
        $new = clone $this;
        $new->TauxHoraire = $TauxHoraire;

        return $new;
    }

    /**
     * @return float
     */
    public function getNbH()
    {
        return $this->NbH;
    }

    /**
     * @param float $NbH
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withNbH($NbH)
    {
        $new = clone $this;
        $new->NbH = $NbH;

        return $new;
    }

    /**
     * @return float
     */
    public function getNbCachets()
    {
        return $this->NbCachets;
    }

    /**
     * @param float $NbCachets
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withNbCachets($NbCachets)
    {
        $new = clone $this;
        $new->NbCachets = $NbCachets;

        return $new;
    }

    /**
     * @return float
     */
    public function getPuCachet()
    {
        return $this->PuCachet;
    }

    /**
     * @param float $PuCachet
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withPuCachet($PuCachet)
    {
        $new = clone $this;
        $new->PuCachet = $PuCachet;

        return $new;
    }

    /**
     * @return int
     */
    public function getTypeCachet()
    {
        return $this->TypeCachet;
    }

    /**
     * @param int $TypeCachet
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withTypeCachet($TypeCachet)
    {
        $new = clone $this;
        $new->TypeCachet = $TypeCachet;

        return $new;
    }

    /**
     * @return bool
     */
    public function getMontantNet()
    {
        return $this->MontantNet;
    }

    /**
     * @param bool $MontantNet
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withMontantNet($MontantNet)
    {
        $new = clone $this;
        $new->MontantNet = $MontantNet;

        return $new;
    }

    /**
     * @return bool
     */
    public function getMontantCoutGlobal()
    {
        return $this->MontantCoutGlobal;
    }

    /**
     * @param bool $MontantCoutGlobal
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withMontantCoutGlobal($MontantCoutGlobal)
    {
        $new = clone $this;
        $new->MontantCoutGlobal = $MontantCoutGlobal;

        return $new;
    }

    /**
     * @return float
     */
    public function getNbJours()
    {
        return $this->NbJours;
    }

    /**
     * @param float $NbJours
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withNbJours($NbJours)
    {
        $new = clone $this;
        $new->NbJours = $NbJours;

        return $new;
    }

    /**
     * @return float
     */
    public function getNbHRepet()
    {
        return $this->NbHRepet;
    }

    /**
     * @param float $NbHRepet
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withNbHRepet($NbHRepet)
    {
        $new = clone $this;
        $new->NbHRepet = $NbHRepet;

        return $new;
    }

    /**
     * @return float
     */
    public function getMtHRepet()
    {
        return $this->MtHRepet;
    }

    /**
     * @param float $MtHRepet
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withMtHRepet($MtHRepet)
    {
        $new = clone $this;
        $new->MtHRepet = $MtHRepet;

        return $new;
    }

    /**
     * @return string
     */
    public function getHLibreCode1()
    {
        return $this->HLibreCode1;
    }

    /**
     * @param string $HLibreCode1
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withHLibreCode1($HLibreCode1)
    {
        $new = clone $this;
        $new->HLibreCode1 = $HLibreCode1;

        return $new;
    }

    /**
     * @return float
     */
    public function getHLibreValeur1()
    {
        return $this->HLibreValeur1;
    }

    /**
     * @param float $HLibreValeur1
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withHLibreValeur1($HLibreValeur1)
    {
        $new = clone $this;
        $new->HLibreValeur1 = $HLibreValeur1;

        return $new;
    }

    /**
     * @return string
     */
    public function getHLibreCode2()
    {
        return $this->HLibreCode2;
    }

    /**
     * @param string $HLibreCode2
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withHLibreCode2($HLibreCode2)
    {
        $new = clone $this;
        $new->HLibreCode2 = $HLibreCode2;

        return $new;
    }

    /**
     * @return float
     */
    public function getHLibreValeur2()
    {
        return $this->HLibreValeur2;
    }

    /**
     * @param float $HLibreValeur2
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withHLibreValeur2($HLibreValeur2)
    {
        $new = clone $this;
        $new->HLibreValeur2 = $HLibreValeur2;

        return $new;
    }

    /**
     * @return string
     */
    public function getHLibreCode3()
    {
        return $this->HLibreCode3;
    }

    /**
     * @param string $HLibreCode3
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withHLibreCode3($HLibreCode3)
    {
        $new = clone $this;
        $new->HLibreCode3 = $HLibreCode3;

        return $new;
    }

    /**
     * @return float
     */
    public function getHLibreValeur3()
    {
        return $this->HLibreValeur3;
    }

    /**
     * @param float $HLibreValeur3
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withHLibreValeur3($HLibreValeur3)
    {
        $new = clone $this;
        $new->HLibreValeur3 = $HLibreValeur3;

        return $new;
    }

    /**
     * @return string
     */
    public function getHLibreCode4()
    {
        return $this->HLibreCode4;
    }

    /**
     * @param string $HLibreCode4
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withHLibreCode4($HLibreCode4)
    {
        $new = clone $this;
        $new->HLibreCode4 = $HLibreCode4;

        return $new;
    }

    /**
     * @return float
     */
    public function getHLibreValeur4()
    {
        return $this->HLibreValeur4;
    }

    /**
     * @param float $HLibreValeur4
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withHLibreValeur4($HLibreValeur4)
    {
        $new = clone $this;
        $new->HLibreValeur4 = $HLibreValeur4;

        return $new;
    }

    /**
     * @return string
     */
    public function getHLibreCode5()
    {
        return $this->HLibreCode5;
    }

    /**
     * @param string $HLibreCode5
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withHLibreCode5($HLibreCode5)
    {
        $new = clone $this;
        $new->HLibreCode5 = $HLibreCode5;

        return $new;
    }

    /**
     * @return float
     */
    public function getHLibreValeur5()
    {
        return $this->HLibreValeur5;
    }

    /**
     * @param float $HLibreValeur5
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withHLibreValeur5($HLibreValeur5)
    {
        $new = clone $this;
        $new->HLibreValeur5 = $HLibreValeur5;

        return $new;
    }

    /**
     * @return string
     */
    public function getHLibreCode6()
    {
        return $this->HLibreCode6;
    }

    /**
     * @param string $HLibreCode6
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withHLibreCode6($HLibreCode6)
    {
        $new = clone $this;
        $new->HLibreCode6 = $HLibreCode6;

        return $new;
    }

    /**
     * @return float
     */
    public function getHLibreValeur6()
    {
        return $this->HLibreValeur6;
    }

    /**
     * @param float $HLibreValeur6
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withHLibreValeur6($HLibreValeur6)
    {
        $new = clone $this;
        $new->HLibreValeur6 = $HLibreValeur6;

        return $new;
    }

    /**
     * @return string
     */
    public function getVariableCode1()
    {
        return $this->VariableCode1;
    }

    /**
     * @param string $VariableCode1
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withVariableCode1($VariableCode1)
    {
        $new = clone $this;
        $new->VariableCode1 = $VariableCode1;

        return $new;
    }

    /**
     * @return float
     */
    public function getVariableValeur1()
    {
        return $this->VariableValeur1;
    }

    /**
     * @param float $VariableValeur1
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withVariableValeur1($VariableValeur1)
    {
        $new = clone $this;
        $new->VariableValeur1 = $VariableValeur1;

        return $new;
    }

    /**
     * @return string
     */
    public function getVariableCode2()
    {
        return $this->VariableCode2;
    }

    /**
     * @param string $VariableCode2
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withVariableCode2($VariableCode2)
    {
        $new = clone $this;
        $new->VariableCode2 = $VariableCode2;

        return $new;
    }

    /**
     * @return float
     */
    public function getVariableValeur2()
    {
        return $this->VariableValeur2;
    }

    /**
     * @param float $VariableValeur2
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withVariableValeur2($VariableValeur2)
    {
        $new = clone $this;
        $new->VariableValeur2 = $VariableValeur2;

        return $new;
    }

    /**
     * @return string
     */
    public function getVariableCode3()
    {
        return $this->VariableCode3;
    }

    /**
     * @param string $VariableCode3
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withVariableCode3($VariableCode3)
    {
        $new = clone $this;
        $new->VariableCode3 = $VariableCode3;

        return $new;
    }

    /**
     * @return float
     */
    public function getVariableValeur3()
    {
        return $this->VariableValeur3;
    }

    /**
     * @param float $VariableValeur3
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withVariableValeur3($VariableValeur3)
    {
        $new = clone $this;
        $new->VariableValeur3 = $VariableValeur3;

        return $new;
    }

    /**
     * @return string
     */
    public function getVariableCode4()
    {
        return $this->VariableCode4;
    }

    /**
     * @param string $VariableCode4
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withVariableCode4($VariableCode4)
    {
        $new = clone $this;
        $new->VariableCode4 = $VariableCode4;

        return $new;
    }

    /**
     * @return float
     */
    public function getVariableValeur4()
    {
        return $this->VariableValeur4;
    }

    /**
     * @param float $VariableValeur4
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withVariableValeur4($VariableValeur4)
    {
        $new = clone $this;
        $new->VariableValeur4 = $VariableValeur4;

        return $new;
    }

    /**
     * @return string
     */
    public function getVariableCode5()
    {
        return $this->VariableCode5;
    }

    /**
     * @param string $VariableCode5
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withVariableCode5($VariableCode5)
    {
        $new = clone $this;
        $new->VariableCode5 = $VariableCode5;

        return $new;
    }

    /**
     * @return float
     */
    public function getVariableValeur5()
    {
        return $this->VariableValeur5;
    }

    /**
     * @param float $VariableValeur5
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withVariableValeur5($VariableValeur5)
    {
        $new = clone $this;
        $new->VariableValeur5 = $VariableValeur5;

        return $new;
    }

    /**
     * @return string
     */
    public function getVariableCode6()
    {
        return $this->VariableCode6;
    }

    /**
     * @param string $VariableCode6
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withVariableCode6($VariableCode6)
    {
        $new = clone $this;
        $new->VariableCode6 = $VariableCode6;

        return $new;
    }

    /**
     * @return float
     */
    public function getVariableValeur6()
    {
        return $this->VariableValeur6;
    }

    /**
     * @param float $VariableValeur6
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withVariableValeur6($VariableValeur6)
    {
        $new = clone $this;
        $new->VariableValeur6 = $VariableValeur6;

        return $new;
    }

    /**
     * @return string
     */
    public function getVariableCode7()
    {
        return $this->VariableCode7;
    }

    /**
     * @param string $VariableCode7
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withVariableCode7($VariableCode7)
    {
        $new = clone $this;
        $new->VariableCode7 = $VariableCode7;

        return $new;
    }

    /**
     * @return float
     */
    public function getVariableValeur7()
    {
        return $this->VariableValeur7;
    }

    /**
     * @param float $VariableValeur7
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withVariableValeur7($VariableValeur7)
    {
        $new = clone $this;
        $new->VariableValeur7 = $VariableValeur7;

        return $new;
    }

    /**
     * @return string
     */
    public function getVariableCode8()
    {
        return $this->VariableCode8;
    }

    /**
     * @param string $VariableCode8
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withVariableCode8($VariableCode8)
    {
        $new = clone $this;
        $new->VariableCode8 = $VariableCode8;

        return $new;
    }

    /**
     * @return float
     */
    public function getVariableValeur8()
    {
        return $this->VariableValeur8;
    }

    /**
     * @param float $VariableValeur8
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withVariableValeur8($VariableValeur8)
    {
        $new = clone $this;
        $new->VariableValeur8 = $VariableValeur8;

        return $new;
    }

    /**
     * @return string
     */
    public function getVariableCode9()
    {
        return $this->VariableCode9;
    }

    /**
     * @param string $VariableCode9
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withVariableCode9($VariableCode9)
    {
        $new = clone $this;
        $new->VariableCode9 = $VariableCode9;

        return $new;
    }

    /**
     * @return float
     */
    public function getVariableValeur9()
    {
        return $this->VariableValeur9;
    }

    /**
     * @param float $VariableValeur9
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withVariableValeur9($VariableValeur9)
    {
        $new = clone $this;
        $new->VariableValeur9 = $VariableValeur9;

        return $new;
    }

    /**
     * @return string
     */
    public function getAffectationAnalytique()
    {
        return $this->AffectationAnalytique;
    }

    /**
     * @param string $AffectationAnalytique
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withAffectationAnalytique($AffectationAnalytique)
    {
        $new = clone $this;
        $new->AffectationAnalytique = $AffectationAnalytique;

        return $new;
    }

    /**
     * @return string
     */
    public function getAffectationAnalytique2()
    {
        return $this->AffectationAnalytique2;
    }

    /**
     * @param string $AffectationAnalytique2
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withAffectationAnalytique2($AffectationAnalytique2)
    {
        $new = clone $this;
        $new->AffectationAnalytique2 = $AffectationAnalytique2;

        return $new;
    }

    /**
     * @return string
     */
    public function getAffectationAnalytique3()
    {
        return $this->AffectationAnalytique3;
    }

    /**
     * @param string $AffectationAnalytique3
     * @return CPAISWSSpectacleSalarieAffectation
     */
    public function withAffectationAnalytique3($AffectationAnalytique3)
    {
        $new = clone $this;
        $new->AffectationAnalytique3 = $AffectationAnalytique3;

        return $new;
    }
}

