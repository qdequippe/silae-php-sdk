<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSExtraSalarieVacation
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
    private $ReferenceExterneManifestation;

    /**
     * @var int
     */
    private $HEmbauche;

    /**
     * @var int
     */
    private $MEmbauche;

    /**
     * @var bool
     */
    private $DocsFinContrat;

    /**
     * @var float
     */
    private $TauxHoraire;

    /**
     * @var float
     */
    private $NbH;

    /**
     * @var bool
     */
    private $MontantNet;

    /**
     * @var bool
     */
    private $MontantCoutGlobal;

    /**
     * @var float
     */
    private $NbJours;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $HLibresCodes;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    private $HLibresValeurs;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $VariablesCodes;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    private $VariablesValeurs;

    /**
     * @return \DateTimeInterface
     */
    public function getDateDebut()
    {
        return $this->DateDebut;
    }

    /**
     * @param \DateTimeInterface $DateDebut
     * @return CPAISWSExtraSalarieVacation
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
     * @return CPAISWSExtraSalarieVacation
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
    public function getReferenceExterneManifestation()
    {
        return $this->ReferenceExterneManifestation;
    }

    /**
     * @param string $ReferenceExterneManifestation
     * @return CPAISWSExtraSalarieVacation
     */
    public function withReferenceExterneManifestation($ReferenceExterneManifestation)
    {
        $new = clone $this;
        $new->ReferenceExterneManifestation = $ReferenceExterneManifestation;

        return $new;
    }

    /**
     * @return int
     */
    public function getHEmbauche()
    {
        return $this->HEmbauche;
    }

    /**
     * @param int $HEmbauche
     * @return CPAISWSExtraSalarieVacation
     */
    public function withHEmbauche($HEmbauche)
    {
        $new = clone $this;
        $new->HEmbauche = $HEmbauche;

        return $new;
    }

    /**
     * @return int
     */
    public function getMEmbauche()
    {
        return $this->MEmbauche;
    }

    /**
     * @param int $MEmbauche
     * @return CPAISWSExtraSalarieVacation
     */
    public function withMEmbauche($MEmbauche)
    {
        $new = clone $this;
        $new->MEmbauche = $MEmbauche;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDocsFinContrat()
    {
        return $this->DocsFinContrat;
    }

    /**
     * @param bool $DocsFinContrat
     * @return CPAISWSExtraSalarieVacation
     */
    public function withDocsFinContrat($DocsFinContrat)
    {
        $new = clone $this;
        $new->DocsFinContrat = $DocsFinContrat;

        return $new;
    }

    /**
     * @return float
     */
    public function getTauxHoraire()
    {
        return $this->TauxHoraire;
    }

    /**
     * @param float $TauxHoraire
     * @return CPAISWSExtraSalarieVacation
     */
    public function withTauxHoraire($TauxHoraire)
    {
        $new = clone $this;
        $new->TauxHoraire = $TauxHoraire;

        return $new;
    }

    /**
     * @return float
     */
    public function getNbH()
    {
        return $this->NbH;
    }

    /**
     * @param float $NbH
     * @return CPAISWSExtraSalarieVacation
     */
    public function withNbH($NbH)
    {
        $new = clone $this;
        $new->NbH = $NbH;

        return $new;
    }

    /**
     * @return bool
     */
    public function getMontantNet()
    {
        return $this->MontantNet;
    }

    /**
     * @param bool $MontantNet
     * @return CPAISWSExtraSalarieVacation
     */
    public function withMontantNet($MontantNet)
    {
        $new = clone $this;
        $new->MontantNet = $MontantNet;

        return $new;
    }

    /**
     * @return bool
     */
    public function getMontantCoutGlobal()
    {
        return $this->MontantCoutGlobal;
    }

    /**
     * @param bool $MontantCoutGlobal
     * @return CPAISWSExtraSalarieVacation
     */
    public function withMontantCoutGlobal($MontantCoutGlobal)
    {
        $new = clone $this;
        $new->MontantCoutGlobal = $MontantCoutGlobal;

        return $new;
    }

    /**
     * @return float
     */
    public function getNbJours()
    {
        return $this->NbJours;
    }

    /**
     * @param float $NbJours
     * @return CPAISWSExtraSalarieVacation
     */
    public function withNbJours($NbJours)
    {
        $new = clone $this;
        $new->NbJours = $NbJours;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getHLibresCodes()
    {
        return $this->HLibresCodes;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $HLibresCodes
     * @return CPAISWSExtraSalarieVacation
     */
    public function withHLibresCodes($HLibresCodes)
    {
        $new = clone $this;
        $new->HLibresCodes = $HLibresCodes;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    public function getHLibresValeurs()
    {
        return $this->HLibresValeurs;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble $HLibresValeurs
     * @return CPAISWSExtraSalarieVacation
     */
    public function withHLibresValeurs($HLibresValeurs)
    {
        $new = clone $this;
        $new->HLibresValeurs = $HLibresValeurs;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getVariablesCodes()
    {
        return $this->VariablesCodes;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $VariablesCodes
     * @return CPAISWSExtraSalarieVacation
     */
    public function withVariablesCodes($VariablesCodes)
    {
        $new = clone $this;
        $new->VariablesCodes = $VariablesCodes;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    public function getVariablesValeurs()
    {
        return $this->VariablesValeurs;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble $VariablesValeurs
     * @return CPAISWSExtraSalarieVacation
     */
    public function withVariablesValeurs($VariablesValeurs)
    {
        $new = clone $this;
        $new->VariablesValeurs = $VariablesValeurs;

        return $new;
    }
}

