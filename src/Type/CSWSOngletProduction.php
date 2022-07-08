<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CSWSOngletProduction
{
    /**
     * @var string
     */
    private $NomOnglet;

    /**
     * @var bool
     */
    private $ASupprimer;

    /**
     * @var int
     */
    private $Ordre;

    /**
     * @var string
     */
    private $NouveauNomOnglet;

    /**
     * @var bool
     */
    private $ParamPaieGestion;

    /**
     * @var bool
     */
    private $ParamPaieLiaisonClient;

    /**
     * @var bool
     */
    private $ParamPaieComplet;

    /**
     * @var bool
     */
    private $ParamPaieSimplifie;

    /**
     * @var bool
     */
    private $AfficherLaListe;

    /**
     * @var bool
     */
    private $RestreindreLaListe;

    /**
     * @var string
     */
    private $RequeteFiltre;

    /**
     * @return string
     */
    public function getNomOnglet()
    {
        return $this->NomOnglet;
    }

    /**
     * @param string $NomOnglet
     * @return CSWSOngletProduction
     */
    public function withNomOnglet($NomOnglet)
    {
        $new = clone $this;
        $new->NomOnglet = $NomOnglet;

        return $new;
    }

    /**
     * @return bool
     */
    public function getASupprimer()
    {
        return $this->ASupprimer;
    }

    /**
     * @param bool $ASupprimer
     * @return CSWSOngletProduction
     */
    public function withASupprimer($ASupprimer)
    {
        $new = clone $this;
        $new->ASupprimer = $ASupprimer;

        return $new;
    }

    /**
     * @return int
     */
    public function getOrdre()
    {
        return $this->Ordre;
    }

    /**
     * @param int $Ordre
     * @return CSWSOngletProduction
     */
    public function withOrdre($Ordre)
    {
        $new = clone $this;
        $new->Ordre = $Ordre;

        return $new;
    }

    /**
     * @return string
     */
    public function getNouveauNomOnglet()
    {
        return $this->NouveauNomOnglet;
    }

    /**
     * @param string $NouveauNomOnglet
     * @return CSWSOngletProduction
     */
    public function withNouveauNomOnglet($NouveauNomOnglet)
    {
        $new = clone $this;
        $new->NouveauNomOnglet = $NouveauNomOnglet;

        return $new;
    }

    /**
     * @return bool
     */
    public function getParamPaieGestion()
    {
        return $this->ParamPaieGestion;
    }

    /**
     * @param bool $ParamPaieGestion
     * @return CSWSOngletProduction
     */
    public function withParamPaieGestion($ParamPaieGestion)
    {
        $new = clone $this;
        $new->ParamPaieGestion = $ParamPaieGestion;

        return $new;
    }

    /**
     * @return bool
     */
    public function getParamPaieLiaisonClient()
    {
        return $this->ParamPaieLiaisonClient;
    }

    /**
     * @param bool $ParamPaieLiaisonClient
     * @return CSWSOngletProduction
     */
    public function withParamPaieLiaisonClient($ParamPaieLiaisonClient)
    {
        $new = clone $this;
        $new->ParamPaieLiaisonClient = $ParamPaieLiaisonClient;

        return $new;
    }

    /**
     * @return bool
     */
    public function getParamPaieComplet()
    {
        return $this->ParamPaieComplet;
    }

    /**
     * @param bool $ParamPaieComplet
     * @return CSWSOngletProduction
     */
    public function withParamPaieComplet($ParamPaieComplet)
    {
        $new = clone $this;
        $new->ParamPaieComplet = $ParamPaieComplet;

        return $new;
    }

    /**
     * @return bool
     */
    public function getParamPaieSimplifie()
    {
        return $this->ParamPaieSimplifie;
    }

    /**
     * @param bool $ParamPaieSimplifie
     * @return CSWSOngletProduction
     */
    public function withParamPaieSimplifie($ParamPaieSimplifie)
    {
        $new = clone $this;
        $new->ParamPaieSimplifie = $ParamPaieSimplifie;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAfficherLaListe()
    {
        return $this->AfficherLaListe;
    }

    /**
     * @param bool $AfficherLaListe
     * @return CSWSOngletProduction
     */
    public function withAfficherLaListe($AfficherLaListe)
    {
        $new = clone $this;
        $new->AfficherLaListe = $AfficherLaListe;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRestreindreLaListe()
    {
        return $this->RestreindreLaListe;
    }

    /**
     * @param bool $RestreindreLaListe
     * @return CSWSOngletProduction
     */
    public function withRestreindreLaListe($RestreindreLaListe)
    {
        $new = clone $this;
        $new->RestreindreLaListe = $RestreindreLaListe;

        return $new;
    }

    /**
     * @return string
     */
    public function getRequeteFiltre()
    {
        return $this->RequeteFiltre;
    }

    /**
     * @param string $RequeteFiltre
     * @return CSWSOngletProduction
     */
    public function withRequeteFiltre($RequeteFiltre)
    {
        $new = clone $this;
        $new->RequeteFiltre = $RequeteFiltre;

        return $new;
    }
}

