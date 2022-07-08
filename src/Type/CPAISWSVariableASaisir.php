<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSVariableASaisir
{
    /**
     * @var string
     */
    private $Nom;

    /**
     * @var string
     */
    private $Famille;

    /**
     * @var string
     */
    private $Libelle_Long;

    /**
     * @var string
     */
    private $Libelle_Court;

    /**
     * @var int
     */
    private $Type_Variable;

    /**
     * @var string
     */
    private $Format;

    /**
     * @var string
     */
    private $Ordre;

    /**
     * @var int
     */
    private $IndiceCouleur;

    /**
     * @var bool
     */
    private $Masquee;

    /**
     * @var string
     */
    private $Options;

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * @param string $Nom
     * @return CPAISWSVariableASaisir
     */
    public function withNom($Nom)
    {
        $new = clone $this;
        $new->Nom = $Nom;

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
     * @return CPAISWSVariableASaisir
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
    public function getLibelle_Long()
    {
        return $this->Libelle_Long;
    }

    /**
     * @param string $Libelle_Long
     * @return CPAISWSVariableASaisir
     */
    public function withLibelle_Long($Libelle_Long)
    {
        $new = clone $this;
        $new->Libelle_Long = $Libelle_Long;

        return $new;
    }

    /**
     * @return string
     */
    public function getLibelle_Court()
    {
        return $this->Libelle_Court;
    }

    /**
     * @param string $Libelle_Court
     * @return CPAISWSVariableASaisir
     */
    public function withLibelle_Court($Libelle_Court)
    {
        $new = clone $this;
        $new->Libelle_Court = $Libelle_Court;

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
     * @return CPAISWSVariableASaisir
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
     * @return CPAISWSVariableASaisir
     */
    public function withFormat($Format)
    {
        $new = clone $this;
        $new->Format = $Format;

        return $new;
    }

    /**
     * @return string
     */
    public function getOrdre()
    {
        return $this->Ordre;
    }

    /**
     * @param string $Ordre
     * @return CPAISWSVariableASaisir
     */
    public function withOrdre($Ordre)
    {
        $new = clone $this;
        $new->Ordre = $Ordre;

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
     * @return CPAISWSVariableASaisir
     */
    public function withIndiceCouleur($IndiceCouleur)
    {
        $new = clone $this;
        $new->IndiceCouleur = $IndiceCouleur;

        return $new;
    }

    /**
     * @return bool
     */
    public function getMasquee()
    {
        return $this->Masquee;
    }

    /**
     * @param bool $Masquee
     * @return CPAISWSVariableASaisir
     */
    public function withMasquee($Masquee)
    {
        $new = clone $this;
        $new->Masquee = $Masquee;

        return $new;
    }

    /**
     * @return string
     */
    public function getOptions()
    {
        return $this->Options;
    }

    /**
     * @param string $Options
     * @return CPAISWSVariableASaisir
     */
    public function withOptions($Options)
    {
        $new = clone $this;
        $new->Options = $Options;

        return $new;
    }
}

