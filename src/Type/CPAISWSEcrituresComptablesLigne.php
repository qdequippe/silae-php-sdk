<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSEcrituresComptablesLigne
{
    /**
     * @var \DateTimeInterface
     */
    private $Periode;

    /**
     * @var string
     */
    private $Compte;

    /**
     * @var string
     */
    private $Libelle;

    /**
     * @var string
     */
    private $Sens;

    /**
     * @var int
     */
    private $IndexRepartition;

    /**
     * @var float
     */
    private $Valeur;

    /**
     * @var float
     */
    private $PctRepartition;

    /**
     * @return \DateTimeInterface
     */
    public function getPeriode()
    {
        return $this->Periode;
    }

    /**
     * @param \DateTimeInterface $Periode
     * @return CPAISWSEcrituresComptablesLigne
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
    public function getCompte()
    {
        return $this->Compte;
    }

    /**
     * @param string $Compte
     * @return CPAISWSEcrituresComptablesLigne
     */
    public function withCompte($Compte)
    {
        $new = clone $this;
        $new->Compte = $Compte;

        return $new;
    }

    /**
     * @return string
     */
    public function getLibelle()
    {
        return $this->Libelle;
    }

    /**
     * @param string $Libelle
     * @return CPAISWSEcrituresComptablesLigne
     */
    public function withLibelle($Libelle)
    {
        $new = clone $this;
        $new->Libelle = $Libelle;

        return $new;
    }

    /**
     * @return string
     */
    public function getSens()
    {
        return $this->Sens;
    }

    /**
     * @param string $Sens
     * @return CPAISWSEcrituresComptablesLigne
     */
    public function withSens($Sens)
    {
        $new = clone $this;
        $new->Sens = $Sens;

        return $new;
    }

    /**
     * @return int
     */
    public function getIndexRepartition()
    {
        return $this->IndexRepartition;
    }

    /**
     * @param int $IndexRepartition
     * @return CPAISWSEcrituresComptablesLigne
     */
    public function withIndexRepartition($IndexRepartition)
    {
        $new = clone $this;
        $new->IndexRepartition = $IndexRepartition;

        return $new;
    }

    /**
     * @return float
     */
    public function getValeur()
    {
        return $this->Valeur;
    }

    /**
     * @param float $Valeur
     * @return CPAISWSEcrituresComptablesLigne
     */
    public function withValeur($Valeur)
    {
        $new = clone $this;
        $new->Valeur = $Valeur;

        return $new;
    }

    /**
     * @return float
     */
    public function getPctRepartition()
    {
        return $this->PctRepartition;
    }

    /**
     * @param float $PctRepartition
     * @return CPAISWSEcrituresComptablesLigne
     */
    public function withPctRepartition($PctRepartition)
    {
        $new = clone $this;
        $new->PctRepartition = $PctRepartition;

        return $new;
    }
}

