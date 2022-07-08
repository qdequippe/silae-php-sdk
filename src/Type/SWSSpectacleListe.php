<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSSpectacleListe implements RequestInterface
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
    private $DateDebutMin;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \DateTimeInterface $DateDebutMin
     */
    public function __construct($Token, $NumeroDossier, $DateDebutMin)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->DateDebutMin = $DateDebutMin;
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
     * @return SWSSpectacleListe
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
     * @return SWSSpectacleListe
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
    public function getDateDebutMin()
    {
        return $this->DateDebutMin;
    }

    /**
     * @param \DateTimeInterface $DateDebutMin
     * @return SWSSpectacleListe
     */
    public function withDateDebutMin($DateDebutMin)
    {
        $new = clone $this;
        $new->DateDebutMin = $DateDebutMin;

        return $new;
    }
}

