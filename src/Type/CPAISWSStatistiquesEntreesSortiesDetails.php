<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSStatistiquesEntreesSortiesDetails
{
    /**
     * @var \DateTimeInterface
     */
    private $Periode;

    /**
     * @var int
     */
    private $EntreesCDI_NouveauSalarie;

    /**
     * @var int
     */
    private $EntreesCDD_NouveauSalarie;

    /**
     * @var int
     */
    private $EntreesAutre_NouveauSalarie;

    /**
     * @var int
     */
    private $EntreesCDI_NouvelEmploi;

    /**
     * @var int
     */
    private $EntreesCDD_NouvelEmploi;

    /**
     * @var int
     */
    private $EntreesAutre_NouvelEmploi;

    /**
     * @var int
     */
    private $Sorties_FinCDD;

    /**
     * @var int
     */
    private $Sorties_Demission;

    /**
     * @var int
     */
    private $Sorties_RuptureConventionnelle;

    /**
     * @var int
     */
    private $Sorties_Licenciement;

    /**
     * @var int
     */
    private $Sorties_Autre;

    /**
     * @return \DateTimeInterface
     */
    public function getPeriode()
    {
        return $this->Periode;
    }

    /**
     * @param \DateTimeInterface $Periode
     * @return CPAISWSStatistiquesEntreesSortiesDetails
     */
    public function withPeriode($Periode)
    {
        $new = clone $this;
        $new->Periode = $Periode;

        return $new;
    }

    /**
     * @return int
     */
    public function getEntreesCDI_NouveauSalarie()
    {
        return $this->EntreesCDI_NouveauSalarie;
    }

    /**
     * @param int $EntreesCDI_NouveauSalarie
     * @return CPAISWSStatistiquesEntreesSortiesDetails
     */
    public function withEntreesCDI_NouveauSalarie($EntreesCDI_NouveauSalarie)
    {
        $new = clone $this;
        $new->EntreesCDI_NouveauSalarie = $EntreesCDI_NouveauSalarie;

        return $new;
    }

    /**
     * @return int
     */
    public function getEntreesCDD_NouveauSalarie()
    {
        return $this->EntreesCDD_NouveauSalarie;
    }

    /**
     * @param int $EntreesCDD_NouveauSalarie
     * @return CPAISWSStatistiquesEntreesSortiesDetails
     */
    public function withEntreesCDD_NouveauSalarie($EntreesCDD_NouveauSalarie)
    {
        $new = clone $this;
        $new->EntreesCDD_NouveauSalarie = $EntreesCDD_NouveauSalarie;

        return $new;
    }

    /**
     * @return int
     */
    public function getEntreesAutre_NouveauSalarie()
    {
        return $this->EntreesAutre_NouveauSalarie;
    }

    /**
     * @param int $EntreesAutre_NouveauSalarie
     * @return CPAISWSStatistiquesEntreesSortiesDetails
     */
    public function withEntreesAutre_NouveauSalarie($EntreesAutre_NouveauSalarie)
    {
        $new = clone $this;
        $new->EntreesAutre_NouveauSalarie = $EntreesAutre_NouveauSalarie;

        return $new;
    }

    /**
     * @return int
     */
    public function getEntreesCDI_NouvelEmploi()
    {
        return $this->EntreesCDI_NouvelEmploi;
    }

    /**
     * @param int $EntreesCDI_NouvelEmploi
     * @return CPAISWSStatistiquesEntreesSortiesDetails
     */
    public function withEntreesCDI_NouvelEmploi($EntreesCDI_NouvelEmploi)
    {
        $new = clone $this;
        $new->EntreesCDI_NouvelEmploi = $EntreesCDI_NouvelEmploi;

        return $new;
    }

    /**
     * @return int
     */
    public function getEntreesCDD_NouvelEmploi()
    {
        return $this->EntreesCDD_NouvelEmploi;
    }

    /**
     * @param int $EntreesCDD_NouvelEmploi
     * @return CPAISWSStatistiquesEntreesSortiesDetails
     */
    public function withEntreesCDD_NouvelEmploi($EntreesCDD_NouvelEmploi)
    {
        $new = clone $this;
        $new->EntreesCDD_NouvelEmploi = $EntreesCDD_NouvelEmploi;

        return $new;
    }

    /**
     * @return int
     */
    public function getEntreesAutre_NouvelEmploi()
    {
        return $this->EntreesAutre_NouvelEmploi;
    }

    /**
     * @param int $EntreesAutre_NouvelEmploi
     * @return CPAISWSStatistiquesEntreesSortiesDetails
     */
    public function withEntreesAutre_NouvelEmploi($EntreesAutre_NouvelEmploi)
    {
        $new = clone $this;
        $new->EntreesAutre_NouvelEmploi = $EntreesAutre_NouvelEmploi;

        return $new;
    }

    /**
     * @return int
     */
    public function getSorties_FinCDD()
    {
        return $this->Sorties_FinCDD;
    }

    /**
     * @param int $Sorties_FinCDD
     * @return CPAISWSStatistiquesEntreesSortiesDetails
     */
    public function withSorties_FinCDD($Sorties_FinCDD)
    {
        $new = clone $this;
        $new->Sorties_FinCDD = $Sorties_FinCDD;

        return $new;
    }

    /**
     * @return int
     */
    public function getSorties_Demission()
    {
        return $this->Sorties_Demission;
    }

    /**
     * @param int $Sorties_Demission
     * @return CPAISWSStatistiquesEntreesSortiesDetails
     */
    public function withSorties_Demission($Sorties_Demission)
    {
        $new = clone $this;
        $new->Sorties_Demission = $Sorties_Demission;

        return $new;
    }

    /**
     * @return int
     */
    public function getSorties_RuptureConventionnelle()
    {
        return $this->Sorties_RuptureConventionnelle;
    }

    /**
     * @param int $Sorties_RuptureConventionnelle
     * @return CPAISWSStatistiquesEntreesSortiesDetails
     */
    public function withSorties_RuptureConventionnelle($Sorties_RuptureConventionnelle)
    {
        $new = clone $this;
        $new->Sorties_RuptureConventionnelle = $Sorties_RuptureConventionnelle;

        return $new;
    }

    /**
     * @return int
     */
    public function getSorties_Licenciement()
    {
        return $this->Sorties_Licenciement;
    }

    /**
     * @param int $Sorties_Licenciement
     * @return CPAISWSStatistiquesEntreesSortiesDetails
     */
    public function withSorties_Licenciement($Sorties_Licenciement)
    {
        $new = clone $this;
        $new->Sorties_Licenciement = $Sorties_Licenciement;

        return $new;
    }

    /**
     * @return int
     */
    public function getSorties_Autre()
    {
        return $this->Sorties_Autre;
    }

    /**
     * @param int $Sorties_Autre
     * @return CPAISWSStatistiquesEntreesSortiesDetails
     */
    public function withSorties_Autre($Sorties_Autre)
    {
        $new = clone $this;
        $new->Sorties_Autre = $Sorties_Autre;

        return $new;
    }
}

