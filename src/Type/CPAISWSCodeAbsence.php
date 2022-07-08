<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSCodeAbsence
{
    /**
     * @var string
     */
    private $Code;

    /**
     * @var string
     */
    private $Libelle;

    /**
     * @var string
     */
    private $LibelleGroupe;

    /**
     * @var bool
     */
    private $SaisieHeures;

    /**
     * @var int
     */
    private $Couleur;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     * @return CPAISWSCodeAbsence
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

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
     * @return CPAISWSCodeAbsence
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
    public function getLibelleGroupe()
    {
        return $this->LibelleGroupe;
    }

    /**
     * @param string $LibelleGroupe
     * @return CPAISWSCodeAbsence
     */
    public function withLibelleGroupe($LibelleGroupe)
    {
        $new = clone $this;
        $new->LibelleGroupe = $LibelleGroupe;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSaisieHeures()
    {
        return $this->SaisieHeures;
    }

    /**
     * @param bool $SaisieHeures
     * @return CPAISWSCodeAbsence
     */
    public function withSaisieHeures($SaisieHeures)
    {
        $new = clone $this;
        $new->SaisieHeures = $SaisieHeures;

        return $new;
    }

    /**
     * @return int
     */
    public function getCouleur()
    {
        return $this->Couleur;
    }

    /**
     * @param int $Couleur
     * @return CPAISWSCodeAbsence
     */
    public function withCouleur($Couleur)
    {
        $new = clone $this;
        $new->Couleur = $Couleur;

        return $new;
    }
}

