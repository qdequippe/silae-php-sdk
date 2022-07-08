<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSEcrituresComptables2 implements RequestInterface
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
    private $PeriodeDebut;

    /**
     * @var \DateTimeInterface
     */
    private $PeriodeFin;

    /**
     * @var bool
     */
    private $AvecLibelleParDefautDesEcritures;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \DateTimeInterface $PeriodeDebut
     * @var \DateTimeInterface $PeriodeFin
     * @var bool $AvecLibelleParDefautDesEcritures
     */
    public function __construct($Token, $NumeroDossier, $PeriodeDebut, $PeriodeFin, $AvecLibelleParDefautDesEcritures)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->PeriodeDebut = $PeriodeDebut;
        $this->PeriodeFin = $PeriodeFin;
        $this->AvecLibelleParDefautDesEcritures = $AvecLibelleParDefautDesEcritures;
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
     * @return SWSEcrituresComptables2
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
     * @return SWSEcrituresComptables2
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
    public function getPeriodeDebut()
    {
        return $this->PeriodeDebut;
    }

    /**
     * @param \DateTimeInterface $PeriodeDebut
     * @return SWSEcrituresComptables2
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
     * @return SWSEcrituresComptables2
     */
    public function withPeriodeFin($PeriodeFin)
    {
        $new = clone $this;
        $new->PeriodeFin = $PeriodeFin;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAvecLibelleParDefautDesEcritures()
    {
        return $this->AvecLibelleParDefautDesEcritures;
    }

    /**
     * @param bool $AvecLibelleParDefautDesEcritures
     * @return SWSEcrituresComptables2
     */
    public function withAvecLibelleParDefautDesEcritures($AvecLibelleParDefautDesEcritures)
    {
        $new = clone $this;
        $new->AvecLibelleParDefautDesEcritures = $AvecLibelleParDefautDesEcritures;

        return $new;
    }
}

