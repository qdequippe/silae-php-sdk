<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSalarieElementCarriere
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
    private $LibelleEmploi;

    /**
     * @var bool
     */
    private $EstCadre;

    /**
     * @var string
     */
    private $TypeContrat;

    /**
     * @var float
     */
    private $HeuresContractuelles;

    /**
     * @var float
     */
    private $SalaireDeBase;

    /**
     * @var string
     */
    private $Coeff1;

    /**
     * @var string
     */
    private $LibelleCoeff1;

    /**
     * @var string
     */
    private $Coeff2;

    /**
     * @var string
     */
    private $LibelleCoeff2;

    /**
     * @var string
     */
    private $Coeff3;

    /**
     * @var string
     */
    private $LibelleCoeff3;

    /**
     * @var string
     */
    private $Coeff4;

    /**
     * @var string
     */
    private $LibelleCoeff4;

    /**
     * @var float
     */
    private $TauxHeuresNormales;

    /**
     * @var float
     */
    private $SalaireDeBaseETP;

    /**
     * @var \DateTimeInterface
     */
    private $DateReelleDebutEmploi;

    /**
     * @var \DateTimeInterface
     */
    private $DateReelleFinEmploi;

    /**
     * @return \DateTimeInterface
     */
    public function getDateDebut()
    {
        return $this->DateDebut;
    }

    /**
     * @param \DateTimeInterface $DateDebut
     * @return CPAISWSSalarieElementCarriere
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
     * @return CPAISWSSalarieElementCarriere
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
    public function getLibelleEmploi()
    {
        return $this->LibelleEmploi;
    }

    /**
     * @param string $LibelleEmploi
     * @return CPAISWSSalarieElementCarriere
     */
    public function withLibelleEmploi($LibelleEmploi)
    {
        $new = clone $this;
        $new->LibelleEmploi = $LibelleEmploi;

        return $new;
    }

    /**
     * @return bool
     */
    public function getEstCadre()
    {
        return $this->EstCadre;
    }

    /**
     * @param bool $EstCadre
     * @return CPAISWSSalarieElementCarriere
     */
    public function withEstCadre($EstCadre)
    {
        $new = clone $this;
        $new->EstCadre = $EstCadre;

        return $new;
    }

    /**
     * @return string
     */
    public function getTypeContrat()
    {
        return $this->TypeContrat;
    }

    /**
     * @param string $TypeContrat
     * @return CPAISWSSalarieElementCarriere
     */
    public function withTypeContrat($TypeContrat)
    {
        $new = clone $this;
        $new->TypeContrat = $TypeContrat;

        return $new;
    }

    /**
     * @return float
     */
    public function getHeuresContractuelles()
    {
        return $this->HeuresContractuelles;
    }

    /**
     * @param float $HeuresContractuelles
     * @return CPAISWSSalarieElementCarriere
     */
    public function withHeuresContractuelles($HeuresContractuelles)
    {
        $new = clone $this;
        $new->HeuresContractuelles = $HeuresContractuelles;

        return $new;
    }

    /**
     * @return float
     */
    public function getSalaireDeBase()
    {
        return $this->SalaireDeBase;
    }

    /**
     * @param float $SalaireDeBase
     * @return CPAISWSSalarieElementCarriere
     */
    public function withSalaireDeBase($SalaireDeBase)
    {
        $new = clone $this;
        $new->SalaireDeBase = $SalaireDeBase;

        return $new;
    }

    /**
     * @return string
     */
    public function getCoeff1()
    {
        return $this->Coeff1;
    }

    /**
     * @param string $Coeff1
     * @return CPAISWSSalarieElementCarriere
     */
    public function withCoeff1($Coeff1)
    {
        $new = clone $this;
        $new->Coeff1 = $Coeff1;

        return $new;
    }

    /**
     * @return string
     */
    public function getLibelleCoeff1()
    {
        return $this->LibelleCoeff1;
    }

    /**
     * @param string $LibelleCoeff1
     * @return CPAISWSSalarieElementCarriere
     */
    public function withLibelleCoeff1($LibelleCoeff1)
    {
        $new = clone $this;
        $new->LibelleCoeff1 = $LibelleCoeff1;

        return $new;
    }

    /**
     * @return string
     */
    public function getCoeff2()
    {
        return $this->Coeff2;
    }

    /**
     * @param string $Coeff2
     * @return CPAISWSSalarieElementCarriere
     */
    public function withCoeff2($Coeff2)
    {
        $new = clone $this;
        $new->Coeff2 = $Coeff2;

        return $new;
    }

    /**
     * @return string
     */
    public function getLibelleCoeff2()
    {
        return $this->LibelleCoeff2;
    }

    /**
     * @param string $LibelleCoeff2
     * @return CPAISWSSalarieElementCarriere
     */
    public function withLibelleCoeff2($LibelleCoeff2)
    {
        $new = clone $this;
        $new->LibelleCoeff2 = $LibelleCoeff2;

        return $new;
    }

    /**
     * @return string
     */
    public function getCoeff3()
    {
        return $this->Coeff3;
    }

    /**
     * @param string $Coeff3
     * @return CPAISWSSalarieElementCarriere
     */
    public function withCoeff3($Coeff3)
    {
        $new = clone $this;
        $new->Coeff3 = $Coeff3;

        return $new;
    }

    /**
     * @return string
     */
    public function getLibelleCoeff3()
    {
        return $this->LibelleCoeff3;
    }

    /**
     * @param string $LibelleCoeff3
     * @return CPAISWSSalarieElementCarriere
     */
    public function withLibelleCoeff3($LibelleCoeff3)
    {
        $new = clone $this;
        $new->LibelleCoeff3 = $LibelleCoeff3;

        return $new;
    }

    /**
     * @return string
     */
    public function getCoeff4()
    {
        return $this->Coeff4;
    }

    /**
     * @param string $Coeff4
     * @return CPAISWSSalarieElementCarriere
     */
    public function withCoeff4($Coeff4)
    {
        $new = clone $this;
        $new->Coeff4 = $Coeff4;

        return $new;
    }

    /**
     * @return string
     */
    public function getLibelleCoeff4()
    {
        return $this->LibelleCoeff4;
    }

    /**
     * @param string $LibelleCoeff4
     * @return CPAISWSSalarieElementCarriere
     */
    public function withLibelleCoeff4($LibelleCoeff4)
    {
        $new = clone $this;
        $new->LibelleCoeff4 = $LibelleCoeff4;

        return $new;
    }

    /**
     * @return float
     */
    public function getTauxHeuresNormales()
    {
        return $this->TauxHeuresNormales;
    }

    /**
     * @param float $TauxHeuresNormales
     * @return CPAISWSSalarieElementCarriere
     */
    public function withTauxHeuresNormales($TauxHeuresNormales)
    {
        $new = clone $this;
        $new->TauxHeuresNormales = $TauxHeuresNormales;

        return $new;
    }

    /**
     * @return float
     */
    public function getSalaireDeBaseETP()
    {
        return $this->SalaireDeBaseETP;
    }

    /**
     * @param float $SalaireDeBaseETP
     * @return CPAISWSSalarieElementCarriere
     */
    public function withSalaireDeBaseETP($SalaireDeBaseETP)
    {
        $new = clone $this;
        $new->SalaireDeBaseETP = $SalaireDeBaseETP;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateReelleDebutEmploi()
    {
        return $this->DateReelleDebutEmploi;
    }

    /**
     * @param \DateTimeInterface $DateReelleDebutEmploi
     * @return CPAISWSSalarieElementCarriere
     */
    public function withDateReelleDebutEmploi($DateReelleDebutEmploi)
    {
        $new = clone $this;
        $new->DateReelleDebutEmploi = $DateReelleDebutEmploi;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateReelleFinEmploi()
    {
        return $this->DateReelleFinEmploi;
    }

    /**
     * @param \DateTimeInterface $DateReelleFinEmploi
     * @return CPAISWSSalarieElementCarriere
     */
    public function withDateReelleFinEmploi($DateReelleFinEmploi)
    {
        $new = clone $this;
        $new->DateReelleFinEmploi = $DateReelleFinEmploi;

        return $new;
    }
}

