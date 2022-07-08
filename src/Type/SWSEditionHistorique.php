<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSEditionHistorique implements RequestInterface
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
     * @var string
     */
    private $CodeEditionHistorique;

    /**
     * @var string
     */
    private $MotDePasse;

    /**
     * @var \DateTimeInterface
     */
    private $PeriodeDebut;

    /**
     * @var \DateTimeInterface
     */
    private $PeriodeFin;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $CodeEditionHistorique
     * @var string $MotDePasse
     * @var \DateTimeInterface $PeriodeDebut
     * @var \DateTimeInterface $PeriodeFin
     */
    public function __construct($Token, $NumeroDossier, $CodeEditionHistorique, $MotDePasse, $PeriodeDebut, $PeriodeFin)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->CodeEditionHistorique = $CodeEditionHistorique;
        $this->MotDePasse = $MotDePasse;
        $this->PeriodeDebut = $PeriodeDebut;
        $this->PeriodeFin = $PeriodeFin;
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
     * @return SWSEditionHistorique
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
     * @return SWSEditionHistorique
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeEditionHistorique()
    {
        return $this->CodeEditionHistorique;
    }

    /**
     * @param string $CodeEditionHistorique
     * @return SWSEditionHistorique
     */
    public function withCodeEditionHistorique($CodeEditionHistorique)
    {
        $new = clone $this;
        $new->CodeEditionHistorique = $CodeEditionHistorique;

        return $new;
    }

    /**
     * @return string
     */
    public function getMotDePasse()
    {
        return $this->MotDePasse;
    }

    /**
     * @param string $MotDePasse
     * @return SWSEditionHistorique
     */
    public function withMotDePasse($MotDePasse)
    {
        $new = clone $this;
        $new->MotDePasse = $MotDePasse;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeDebut()
    {
        return $this->PeriodeDebut;
    }

    /**
     * @param \DateTimeInterface $PeriodeDebut
     * @return SWSEditionHistorique
     */
    public function withPeriodeDebut($PeriodeDebut)
    {
        $new = clone $this;
        $new->PeriodeDebut = $PeriodeDebut;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeFin()
    {
        return $this->PeriodeFin;
    }

    /**
     * @param \DateTimeInterface $PeriodeFin
     * @return SWSEditionHistorique
     */
    public function withPeriodeFin($PeriodeFin)
    {
        $new = clone $this;
        $new->PeriodeFin = $PeriodeFin;

        return $new;
    }
}

