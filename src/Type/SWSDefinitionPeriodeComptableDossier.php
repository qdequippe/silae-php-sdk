<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSDefinitionPeriodeComptableDossier implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var string
     */
    private $NumeroDossier;

    /**
     * @var \DateTimeInterface
     */
    private $DebutExerciceComptable;

    /**
     * @var \DateTimeInterface
     */
    private $FinExerciceComptable;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \DateTimeInterface $DebutExerciceComptable
     * @var \DateTimeInterface $FinExerciceComptable
     */
    public function __construct($Token, $NumeroDossier, $DebutExerciceComptable, $FinExerciceComptable)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->DebutExerciceComptable = $DebutExerciceComptable;
        $this->FinExerciceComptable = $FinExerciceComptable;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param string $Token
     * @return SWSDefinitionPeriodeComptableDossier
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumeroDossier()
    {
        return $this->NumeroDossier;
    }

    /**
     * @param string $NumeroDossier
     * @return SWSDefinitionPeriodeComptableDossier
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDebutExerciceComptable()
    {
        return $this->DebutExerciceComptable;
    }

    /**
     * @param \DateTimeInterface $DebutExerciceComptable
     * @return SWSDefinitionPeriodeComptableDossier
     */
    public function withDebutExerciceComptable($DebutExerciceComptable)
    {
        $new = clone $this;
        $new->DebutExerciceComptable = $DebutExerciceComptable;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getFinExerciceComptable()
    {
        return $this->FinExerciceComptable;
    }

    /**
     * @param \DateTimeInterface $FinExerciceComptable
     * @return SWSDefinitionPeriodeComptableDossier
     */
    public function withFinExerciceComptable($FinExerciceComptable)
    {
        $new = clone $this;
        $new->FinExerciceComptable = $FinExerciceComptable;

        return $new;
    }
}

