<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSRecuperationListeEV implements RequestInterface
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
    private $Periode;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\Options
     */
    private $Options;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \DateTimeInterface $Periode
     * @var \Qdequippe\SilaePhpSdk\Type\Options $Options
     */
    public function __construct($Token, $NumeroDossier, $Periode, $Options)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->Periode = $Periode;
        $this->Options = $Options;
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
     * @return SWSRecuperationListeEV
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
     * @return SWSRecuperationListeEV
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
    public function getPeriode()
    {
        return $this->Periode;
    }

    /**
     * @param \DateTimeInterface $Periode
     * @return SWSRecuperationListeEV
     */
    public function withPeriode($Periode)
    {
        $new = clone $this;
        $new->Periode = $Periode;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\Options
     */
    public function getOptions()
    {
        return $this->Options;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\Options $Options
     * @return SWSRecuperationListeEV
     */
    public function withOptions($Options)
    {
        $new = clone $this;
        $new->Options = $Options;

        return $new;
    }
}

