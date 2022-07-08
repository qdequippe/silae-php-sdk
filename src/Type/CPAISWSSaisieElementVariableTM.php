<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSaisieElementVariableTM
{
    /**
     * @var \DateTimeInterface
     */
    private $Periode;

    /**
     * @var string
     */
    private $CodeIdentifiantEV;

    /**
     * @var string
     */
    private $CodeLibelle;

    /**
     * @var string
     */
    private $LibelleCourt;

    /**
     * @var string
     */
    private $LibelleLong;

    /**
     * @var float
     */
    private $Montant;

    /**
     * @var float
     */
    private $Base;

    /**
     * @var float
     */
    private $Taux;

    /**
     * @var string
     */
    private $Chaine;

    /**
     * @var bool
     */
    private $PrimeNette;

    /**
     * @var bool
     */
    private $ValeurSaisie;

    /**
     * @var bool
     */
    private $PrimeConfirmee;

    /**
     * @return \DateTimeInterface
     */
    public function getPeriode()
    {
        return $this->Periode;
    }

    /**
     * @param \DateTimeInterface $Periode
     * @return CPAISWSSaisieElementVariableTM
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
    public function getCodeIdentifiantEV()
    {
        return $this->CodeIdentifiantEV;
    }

    /**
     * @param string $CodeIdentifiantEV
     * @return CPAISWSSaisieElementVariableTM
     */
    public function withCodeIdentifiantEV($CodeIdentifiantEV)
    {
        $new = clone $this;
        $new->CodeIdentifiantEV = $CodeIdentifiantEV;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeLibelle()
    {
        return $this->CodeLibelle;
    }

    /**
     * @param string $CodeLibelle
     * @return CPAISWSSaisieElementVariableTM
     */
    public function withCodeLibelle($CodeLibelle)
    {
        $new = clone $this;
        $new->CodeLibelle = $CodeLibelle;

        return $new;
    }

    /**
     * @return string
     */
    public function getLibelleCourt()
    {
        return $this->LibelleCourt;
    }

    /**
     * @param string $LibelleCourt
     * @return CPAISWSSaisieElementVariableTM
     */
    public function withLibelleCourt($LibelleCourt)
    {
        $new = clone $this;
        $new->LibelleCourt = $LibelleCourt;

        return $new;
    }

    /**
     * @return string
     */
    public function getLibelleLong()
    {
        return $this->LibelleLong;
    }

    /**
     * @param string $LibelleLong
     * @return CPAISWSSaisieElementVariableTM
     */
    public function withLibelleLong($LibelleLong)
    {
        $new = clone $this;
        $new->LibelleLong = $LibelleLong;

        return $new;
    }

    /**
     * @return float
     */
    public function getMontant()
    {
        return $this->Montant;
    }

    /**
     * @param float $Montant
     * @return CPAISWSSaisieElementVariableTM
     */
    public function withMontant($Montant)
    {
        $new = clone $this;
        $new->Montant = $Montant;

        return $new;
    }

    /**
     * @return float
     */
    public function getBase()
    {
        return $this->Base;
    }

    /**
     * @param float $Base
     * @return CPAISWSSaisieElementVariableTM
     */
    public function withBase($Base)
    {
        $new = clone $this;
        $new->Base = $Base;

        return $new;
    }

    /**
     * @return float
     */
    public function getTaux()
    {
        return $this->Taux;
    }

    /**
     * @param float $Taux
     * @return CPAISWSSaisieElementVariableTM
     */
    public function withTaux($Taux)
    {
        $new = clone $this;
        $new->Taux = $Taux;

        return $new;
    }

    /**
     * @return string
     */
    public function getChaine()
    {
        return $this->Chaine;
    }

    /**
     * @param string $Chaine
     * @return CPAISWSSaisieElementVariableTM
     */
    public function withChaine($Chaine)
    {
        $new = clone $this;
        $new->Chaine = $Chaine;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPrimeNette()
    {
        return $this->PrimeNette;
    }

    /**
     * @param bool $PrimeNette
     * @return CPAISWSSaisieElementVariableTM
     */
    public function withPrimeNette($PrimeNette)
    {
        $new = clone $this;
        $new->PrimeNette = $PrimeNette;

        return $new;
    }

    /**
     * @return bool
     */
    public function getValeurSaisie()
    {
        return $this->ValeurSaisie;
    }

    /**
     * @param bool $ValeurSaisie
     * @return CPAISWSSaisieElementVariableTM
     */
    public function withValeurSaisie($ValeurSaisie)
    {
        $new = clone $this;
        $new->ValeurSaisie = $ValeurSaisie;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPrimeConfirmee()
    {
        return $this->PrimeConfirmee;
    }

    /**
     * @param bool $PrimeConfirmee
     * @return CPAISWSSaisieElementVariableTM
     */
    public function withPrimeConfirmee($PrimeConfirmee)
    {
        $new = clone $this;
        $new->PrimeConfirmee = $PrimeConfirmee;

        return $new;
    }
}

