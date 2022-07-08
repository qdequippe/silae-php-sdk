<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSLigneBulletin
{
    /**
     * @var string
     */
    private $CodeLibelle;

    /**
     * @var string
     */
    private $Libelle;

    /**
     * @var float
     */
    private $BaseSalariale;

    /**
     * @var float
     */
    private $TauxOuMontantSalarial;

    /**
     * @var float
     */
    private $ResultatSalarial;

    /**
     * @var float
     */
    private $BasePatronale;

    /**
     * @var float
     */
    private $TauxOuMontantPatronal;

    /**
     * @var float
     */
    private $ResultatPatronal;

    /**
     * @var string
     */
    private $CodeDucs;

    /**
     * @return string
     */
    public function getCodeLibelle()
    {
        return $this->CodeLibelle;
    }

    /**
     * @param string $CodeLibelle
     * @return CPAISWSLigneBulletin
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
    public function getLibelle()
    {
        return $this->Libelle;
    }

    /**
     * @param string $Libelle
     * @return CPAISWSLigneBulletin
     */
    public function withLibelle($Libelle)
    {
        $new = clone $this;
        $new->Libelle = $Libelle;

        return $new;
    }

    /**
     * @return float
     */
    public function getBaseSalariale()
    {
        return $this->BaseSalariale;
    }

    /**
     * @param float $BaseSalariale
     * @return CPAISWSLigneBulletin
     */
    public function withBaseSalariale($BaseSalariale)
    {
        $new = clone $this;
        $new->BaseSalariale = $BaseSalariale;

        return $new;
    }

    /**
     * @return float
     */
    public function getTauxOuMontantSalarial()
    {
        return $this->TauxOuMontantSalarial;
    }

    /**
     * @param float $TauxOuMontantSalarial
     * @return CPAISWSLigneBulletin
     */
    public function withTauxOuMontantSalarial($TauxOuMontantSalarial)
    {
        $new = clone $this;
        $new->TauxOuMontantSalarial = $TauxOuMontantSalarial;

        return $new;
    }

    /**
     * @return float
     */
    public function getResultatSalarial()
    {
        return $this->ResultatSalarial;
    }

    /**
     * @param float $ResultatSalarial
     * @return CPAISWSLigneBulletin
     */
    public function withResultatSalarial($ResultatSalarial)
    {
        $new = clone $this;
        $new->ResultatSalarial = $ResultatSalarial;

        return $new;
    }

    /**
     * @return float
     */
    public function getBasePatronale()
    {
        return $this->BasePatronale;
    }

    /**
     * @param float $BasePatronale
     * @return CPAISWSLigneBulletin
     */
    public function withBasePatronale($BasePatronale)
    {
        $new = clone $this;
        $new->BasePatronale = $BasePatronale;

        return $new;
    }

    /**
     * @return float
     */
    public function getTauxOuMontantPatronal()
    {
        return $this->TauxOuMontantPatronal;
    }

    /**
     * @param float $TauxOuMontantPatronal
     * @return CPAISWSLigneBulletin
     */
    public function withTauxOuMontantPatronal($TauxOuMontantPatronal)
    {
        $new = clone $this;
        $new->TauxOuMontantPatronal = $TauxOuMontantPatronal;

        return $new;
    }

    /**
     * @return float
     */
    public function getResultatPatronal()
    {
        return $this->ResultatPatronal;
    }

    /**
     * @param float $ResultatPatronal
     * @return CPAISWSLigneBulletin
     */
    public function withResultatPatronal($ResultatPatronal)
    {
        $new = clone $this;
        $new->ResultatPatronal = $ResultatPatronal;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeDucs()
    {
        return $this->CodeDucs;
    }

    /**
     * @param string $CodeDucs
     * @return CPAISWSLigneBulletin
     */
    public function withCodeDucs($CodeDucs)
    {
        $new = clone $this;
        $new->CodeDucs = $CodeDucs;

        return $new;
    }
}

