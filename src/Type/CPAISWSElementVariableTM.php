<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSElementVariableTM
{
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
    private $Famille;

    /**
     * @var string
     */
    private $LibelleCourt;

    /**
     * @var string
     */
    private $LibelleLong;

    /**
     * @var int
     */
    private $IndiceCouleur;

    /**
     * @var int
     */
    private $Type_Variable;

    /**
     * @var string
     */
    private $Format;

    /**
     * @var bool
     */
    private $ARenseignerParBaseTaux;

    /**
     * @var bool
     */
    private $AjouteeManuellement;

    /**
     * @return string
     */
    public function getCodeIdentifiantEV()
    {
        return $this->CodeIdentifiantEV;
    }

    /**
     * @param string $CodeIdentifiantEV
     * @return CPAISWSElementVariableTM
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
     * @return CPAISWSElementVariableTM
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
    public function getFamille()
    {
        return $this->Famille;
    }

    /**
     * @param string $Famille
     * @return CPAISWSElementVariableTM
     */
    public function withFamille($Famille)
    {
        $new = clone $this;
        $new->Famille = $Famille;

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
     * @return CPAISWSElementVariableTM
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
     * @return CPAISWSElementVariableTM
     */
    public function withLibelleLong($LibelleLong)
    {
        $new = clone $this;
        $new->LibelleLong = $LibelleLong;

        return $new;
    }

    /**
     * @return int
     */
    public function getIndiceCouleur()
    {
        return $this->IndiceCouleur;
    }

    /**
     * @param int $IndiceCouleur
     * @return CPAISWSElementVariableTM
     */
    public function withIndiceCouleur($IndiceCouleur)
    {
        $new = clone $this;
        $new->IndiceCouleur = $IndiceCouleur;

        return $new;
    }

    /**
     * @return int
     */
    public function getType_Variable()
    {
        return $this->Type_Variable;
    }

    /**
     * @param int $Type_Variable
     * @return CPAISWSElementVariableTM
     */
    public function withType_Variable($Type_Variable)
    {
        $new = clone $this;
        $new->Type_Variable = $Type_Variable;

        return $new;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->Format;
    }

    /**
     * @param string $Format
     * @return CPAISWSElementVariableTM
     */
    public function withFormat($Format)
    {
        $new = clone $this;
        $new->Format = $Format;

        return $new;
    }

    /**
     * @return bool
     */
    public function getARenseignerParBaseTaux()
    {
        return $this->ARenseignerParBaseTaux;
    }

    /**
     * @param bool $ARenseignerParBaseTaux
     * @return CPAISWSElementVariableTM
     */
    public function withARenseignerParBaseTaux($ARenseignerParBaseTaux)
    {
        $new = clone $this;
        $new->ARenseignerParBaseTaux = $ARenseignerParBaseTaux;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAjouteeManuellement()
    {
        return $this->AjouteeManuellement;
    }

    /**
     * @param bool $AjouteeManuellement
     * @return CPAISWSElementVariableTM
     */
    public function withAjouteeManuellement($AjouteeManuellement)
    {
        $new = clone $this;
        $new->AjouteeManuellement = $AjouteeManuellement;

        return $new;
    }
}

