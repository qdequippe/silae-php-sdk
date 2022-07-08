<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSReponseSalarieBulletinEntete
{
    /**
     * @var string
     */
    private $MatriculeSalarie;

    /**
     * @var int
     */
    private $IdentifiantEmploi;

    /**
     * @var bool
     */
    private $BulletinOriginal;

    /**
     * @var \DateTimeInterface
     */
    private $Periode;

    /**
     * @var string
     */
    private $IntituleEmploi;

    /**
     * @var string
     */
    private $CodeContratTravail;

    /**
     * @var float
     */
    private $Brut;

    /**
     * @var float
     */
    private $NetAPayer;

    /**
     * @var float
     */
    private $CumulRetenuesSD;

    /**
     * @var float
     */
    private $CumulRetenuesSND;

    /**
     * @var float
     */
    private $CumulRetenuesP;

    /**
     * @var float
     */
    private $SupplementCoutGlobal;

    /**
     * @var float
     */
    private $NetImposable;

    /**
     * @var float
     */
    private $HeuresNormales;

    /**
     * @var float
     */
    private $HeuresMajorees;

    /**
     * @return string
     */
    public function getMatriculeSalarie()
    {
        return $this->MatriculeSalarie;
    }

    /**
     * @param string $MatriculeSalarie
     * @return CPAISWSReponseSalarieBulletinEntete
     */
    public function withMatriculeSalarie($MatriculeSalarie)
    {
        $new = clone $this;
        $new->MatriculeSalarie = $MatriculeSalarie;

        return $new;
    }

    /**
     * @return int
     */
    public function getIdentifiantEmploi()
    {
        return $this->IdentifiantEmploi;
    }

    /**
     * @param int $IdentifiantEmploi
     * @return CPAISWSReponseSalarieBulletinEntete
     */
    public function withIdentifiantEmploi($IdentifiantEmploi)
    {
        $new = clone $this;
        $new->IdentifiantEmploi = $IdentifiantEmploi;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBulletinOriginal()
    {
        return $this->BulletinOriginal;
    }

    /**
     * @param bool $BulletinOriginal
     * @return CPAISWSReponseSalarieBulletinEntete
     */
    public function withBulletinOriginal($BulletinOriginal)
    {
        $new = clone $this;
        $new->BulletinOriginal = $BulletinOriginal;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPeriode()
    {
        return $this->Periode;
    }

    /**
     * @param \DateTimeInterface $Periode
     * @return CPAISWSReponseSalarieBulletinEntete
     */
    public function withPeriode($Periode)
    {
        $new = clone $this;
        $new->Periode = $Periode;

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
     * @return CPAISWSReponseSalarieBulletinEntete
     */
    public function withIntituleEmploi($IntituleEmploi)
    {
        $new = clone $this;
        $new->IntituleEmploi = $IntituleEmploi;

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
     * @return CPAISWSReponseSalarieBulletinEntete
     */
    public function withCodeContratTravail($CodeContratTravail)
    {
        $new = clone $this;
        $new->CodeContratTravail = $CodeContratTravail;

        return $new;
    }

    /**
     * @return float
     */
    public function getBrut()
    {
        return $this->Brut;
    }

    /**
     * @param float $Brut
     * @return CPAISWSReponseSalarieBulletinEntete
     */
    public function withBrut($Brut)
    {
        $new = clone $this;
        $new->Brut = $Brut;

        return $new;
    }

    /**
     * @return float
     */
    public function getNetAPayer()
    {
        return $this->NetAPayer;
    }

    /**
     * @param float $NetAPayer
     * @return CPAISWSReponseSalarieBulletinEntete
     */
    public function withNetAPayer($NetAPayer)
    {
        $new = clone $this;
        $new->NetAPayer = $NetAPayer;

        return $new;
    }

    /**
     * @return float
     */
    public function getCumulRetenuesSD()
    {
        return $this->CumulRetenuesSD;
    }

    /**
     * @param float $CumulRetenuesSD
     * @return CPAISWSReponseSalarieBulletinEntete
     */
    public function withCumulRetenuesSD($CumulRetenuesSD)
    {
        $new = clone $this;
        $new->CumulRetenuesSD = $CumulRetenuesSD;

        return $new;
    }

    /**
     * @return float
     */
    public function getCumulRetenuesSND()
    {
        return $this->CumulRetenuesSND;
    }

    /**
     * @param float $CumulRetenuesSND
     * @return CPAISWSReponseSalarieBulletinEntete
     */
    public function withCumulRetenuesSND($CumulRetenuesSND)
    {
        $new = clone $this;
        $new->CumulRetenuesSND = $CumulRetenuesSND;

        return $new;
    }

    /**
     * @return float
     */
    public function getCumulRetenuesP()
    {
        return $this->CumulRetenuesP;
    }

    /**
     * @param float $CumulRetenuesP
     * @return CPAISWSReponseSalarieBulletinEntete
     */
    public function withCumulRetenuesP($CumulRetenuesP)
    {
        $new = clone $this;
        $new->CumulRetenuesP = $CumulRetenuesP;

        return $new;
    }

    /**
     * @return float
     */
    public function getSupplementCoutGlobal()
    {
        return $this->SupplementCoutGlobal;
    }

    /**
     * @param float $SupplementCoutGlobal
     * @return CPAISWSReponseSalarieBulletinEntete
     */
    public function withSupplementCoutGlobal($SupplementCoutGlobal)
    {
        $new = clone $this;
        $new->SupplementCoutGlobal = $SupplementCoutGlobal;

        return $new;
    }

    /**
     * @return float
     */
    public function getNetImposable()
    {
        return $this->NetImposable;
    }

    /**
     * @param float $NetImposable
     * @return CPAISWSReponseSalarieBulletinEntete
     */
    public function withNetImposable($NetImposable)
    {
        $new = clone $this;
        $new->NetImposable = $NetImposable;

        return $new;
    }

    /**
     * @return float
     */
    public function getHeuresNormales()
    {
        return $this->HeuresNormales;
    }

    /**
     * @param float $HeuresNormales
     * @return CPAISWSReponseSalarieBulletinEntete
     */
    public function withHeuresNormales($HeuresNormales)
    {
        $new = clone $this;
        $new->HeuresNormales = $HeuresNormales;

        return $new;
    }

    /**
     * @return float
     */
    public function getHeuresMajorees()
    {
        return $this->HeuresMajorees;
    }

    /**
     * @param float $HeuresMajorees
     * @return CPAISWSReponseSalarieBulletinEntete
     */
    public function withHeuresMajorees($HeuresMajorees)
    {
        $new = clone $this;
        $new->HeuresMajorees = $HeuresMajorees;

        return $new;
    }
}

