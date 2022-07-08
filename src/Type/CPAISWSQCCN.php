<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSQCCN
{
    /**
     * @var string
     */
    private $LibelleQuestion;

    /**
     * @var string
     */
    private $NomChamp;

    /**
     * @var string
     */
    private $TypeChamp;

    /**
     * @var int
     */
    private $NombreEntier;

    /**
     * @var int
     */
    private $NombreDecimale;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSLibelleValeur
     */
    private $ListeChoix;

    /**
     * @return string
     */
    public function getLibelleQuestion()
    {
        return $this->LibelleQuestion;
    }

    /**
     * @param string $LibelleQuestion
     * @return CPAISWSQCCN
     */
    public function withLibelleQuestion($LibelleQuestion)
    {
        $new = clone $this;
        $new->LibelleQuestion = $LibelleQuestion;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomChamp()
    {
        return $this->NomChamp;
    }

    /**
     * @param string $NomChamp
     * @return CPAISWSQCCN
     */
    public function withNomChamp($NomChamp)
    {
        $new = clone $this;
        $new->NomChamp = $NomChamp;

        return $new;
    }

    /**
     * @return string
     */
    public function getTypeChamp()
    {
        return $this->TypeChamp;
    }

    /**
     * @param string $TypeChamp
     * @return CPAISWSQCCN
     */
    public function withTypeChamp($TypeChamp)
    {
        $new = clone $this;
        $new->TypeChamp = $TypeChamp;

        return $new;
    }

    /**
     * @return int
     */
    public function getNombreEntier()
    {
        return $this->NombreEntier;
    }

    /**
     * @param int $NombreEntier
     * @return CPAISWSQCCN
     */
    public function withNombreEntier($NombreEntier)
    {
        $new = clone $this;
        $new->NombreEntier = $NombreEntier;

        return $new;
    }

    /**
     * @return int
     */
    public function getNombreDecimale()
    {
        return $this->NombreDecimale;
    }

    /**
     * @param int $NombreDecimale
     * @return CPAISWSQCCN
     */
    public function withNombreDecimale($NombreDecimale)
    {
        $new = clone $this;
        $new->NombreDecimale = $NombreDecimale;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSLibelleValeur
     */
    public function getListeChoix()
    {
        return $this->ListeChoix;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSLibelleValeur $ListeChoix
     * @return CPAISWSQCCN
     */
    public function withListeChoix($ListeChoix)
    {
        $new = clone $this;
        $new->ListeChoix = $ListeChoix;

        return $new;
    }
}

