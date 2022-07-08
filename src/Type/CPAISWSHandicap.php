<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSHandicap
{
    /**
     * @var bool
     */
    private $CDAPH_RQTH;

    /**
     * @var bool
     */
    private $CDAPH_AAH;

    /**
     * @var bool
     */
    private $CDAPH_CarteInvalidite;

    /**
     * @var \DateTimeInterface
     */
    private $CDAPH_DateDebut;

    /**
     * @var \DateTimeInterface
     */
    private $CDAPH_DateFin;

    /**
     * @var \DateTimeInterface
     */
    private $CDAPH_DtDepotRenouvellement;

    /**
     * @var float
     */
    private $CDAPH_TauxIncapacite;

    /**
     * @var int
     */
    private $Accident_Nature;

    /**
     * @var \DateTimeInterface
     */
    private $Accident_DateDebut;

    /**
     * @var float
     */
    private $Accident_TauxIPP;

    /**
     * @var int
     */
    private $Accident_CategoriePension;

    /**
     * @var int
     */
    private $Autre_Categorie;

    /**
     * @var \DateTimeInterface
     */
    private $Autre_DateDebut;

    /**
     * @return bool
     */
    public function getCDAPH_RQTH()
    {
        return $this->CDAPH_RQTH;
    }

    /**
     * @param bool $CDAPH_RQTH
     * @return CPAISWSHandicap
     */
    public function withCDAPH_RQTH($CDAPH_RQTH)
    {
        $new = clone $this;
        $new->CDAPH_RQTH = $CDAPH_RQTH;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCDAPH_AAH()
    {
        return $this->CDAPH_AAH;
    }

    /**
     * @param bool $CDAPH_AAH
     * @return CPAISWSHandicap
     */
    public function withCDAPH_AAH($CDAPH_AAH)
    {
        $new = clone $this;
        $new->CDAPH_AAH = $CDAPH_AAH;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCDAPH_CarteInvalidite()
    {
        return $this->CDAPH_CarteInvalidite;
    }

    /**
     * @param bool $CDAPH_CarteInvalidite
     * @return CPAISWSHandicap
     */
    public function withCDAPH_CarteInvalidite($CDAPH_CarteInvalidite)
    {
        $new = clone $this;
        $new->CDAPH_CarteInvalidite = $CDAPH_CarteInvalidite;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCDAPH_DateDebut()
    {
        return $this->CDAPH_DateDebut;
    }

    /**
     * @param \DateTimeInterface $CDAPH_DateDebut
     * @return CPAISWSHandicap
     */
    public function withCDAPH_DateDebut($CDAPH_DateDebut)
    {
        $new = clone $this;
        $new->CDAPH_DateDebut = $CDAPH_DateDebut;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCDAPH_DateFin()
    {
        return $this->CDAPH_DateFin;
    }

    /**
     * @param \DateTimeInterface $CDAPH_DateFin
     * @return CPAISWSHandicap
     */
    public function withCDAPH_DateFin($CDAPH_DateFin)
    {
        $new = clone $this;
        $new->CDAPH_DateFin = $CDAPH_DateFin;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCDAPH_DtDepotRenouvellement()
    {
        return $this->CDAPH_DtDepotRenouvellement;
    }

    /**
     * @param \DateTimeInterface $CDAPH_DtDepotRenouvellement
     * @return CPAISWSHandicap
     */
    public function withCDAPH_DtDepotRenouvellement($CDAPH_DtDepotRenouvellement)
    {
        $new = clone $this;
        $new->CDAPH_DtDepotRenouvellement = $CDAPH_DtDepotRenouvellement;

        return $new;
    }

    /**
     * @return float
     */
    public function getCDAPH_TauxIncapacite()
    {
        return $this->CDAPH_TauxIncapacite;
    }

    /**
     * @param float $CDAPH_TauxIncapacite
     * @return CPAISWSHandicap
     */
    public function withCDAPH_TauxIncapacite($CDAPH_TauxIncapacite)
    {
        $new = clone $this;
        $new->CDAPH_TauxIncapacite = $CDAPH_TauxIncapacite;

        return $new;
    }

    /**
     * @return int
     */
    public function getAccident_Nature()
    {
        return $this->Accident_Nature;
    }

    /**
     * @param int $Accident_Nature
     * @return CPAISWSHandicap
     */
    public function withAccident_Nature($Accident_Nature)
    {
        $new = clone $this;
        $new->Accident_Nature = $Accident_Nature;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getAccident_DateDebut()
    {
        return $this->Accident_DateDebut;
    }

    /**
     * @param \DateTimeInterface $Accident_DateDebut
     * @return CPAISWSHandicap
     */
    public function withAccident_DateDebut($Accident_DateDebut)
    {
        $new = clone $this;
        $new->Accident_DateDebut = $Accident_DateDebut;

        return $new;
    }

    /**
     * @return float
     */
    public function getAccident_TauxIPP()
    {
        return $this->Accident_TauxIPP;
    }

    /**
     * @param float $Accident_TauxIPP
     * @return CPAISWSHandicap
     */
    public function withAccident_TauxIPP($Accident_TauxIPP)
    {
        $new = clone $this;
        $new->Accident_TauxIPP = $Accident_TauxIPP;

        return $new;
    }

    /**
     * @return int
     */
    public function getAccident_CategoriePension()
    {
        return $this->Accident_CategoriePension;
    }

    /**
     * @param int $Accident_CategoriePension
     * @return CPAISWSHandicap
     */
    public function withAccident_CategoriePension($Accident_CategoriePension)
    {
        $new = clone $this;
        $new->Accident_CategoriePension = $Accident_CategoriePension;

        return $new;
    }

    /**
     * @return int
     */
    public function getAutre_Categorie()
    {
        return $this->Autre_Categorie;
    }

    /**
     * @param int $Autre_Categorie
     * @return CPAISWSHandicap
     */
    public function withAutre_Categorie($Autre_Categorie)
    {
        $new = clone $this;
        $new->Autre_Categorie = $Autre_Categorie;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getAutre_DateDebut()
    {
        return $this->Autre_DateDebut;
    }

    /**
     * @param \DateTimeInterface $Autre_DateDebut
     * @return CPAISWSHandicap
     */
    public function withAutre_DateDebut($Autre_DateDebut)
    {
        $new = clone $this;
        $new->Autre_DateDebut = $Autre_DateDebut;

        return $new;
    }
}

