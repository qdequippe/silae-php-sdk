<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSSupprimerCentreMedical implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSCentreMedical
     */
    private $CentreMedical;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSCentreMedical $CentreMedical
     */
    public function __construct($Token, $NumeroDossier, $CentreMedical)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->CentreMedical = $CentreMedical;
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
     * @return SWSSupprimerCentreMedical
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
     * @return SWSSupprimerCentreMedical
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSCentreMedical
     */
    public function getCentreMedical()
    {
        return $this->CentreMedical;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSCentreMedical $CentreMedical
     * @return SWSSupprimerCentreMedical
     */
    public function withCentreMedical($CentreMedical)
    {
        $new = clone $this;
        $new->CentreMedical = $CentreMedical;

        return $new;
    }
}

