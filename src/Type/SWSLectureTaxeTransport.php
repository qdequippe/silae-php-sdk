<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSLectureTaxeTransport implements RequestInterface
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
    private $NomInterneEtablissement;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $NomInterneEtablissement
     */
    public function __construct($Token, $NumeroDossier, $NomInterneEtablissement)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->NomInterneEtablissement = $NomInterneEtablissement;
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
     * @return SWSLectureTaxeTransport
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
     * @return SWSLectureTaxeTransport
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
    public function getNomInterneEtablissement()
    {
        return $this->NomInterneEtablissement;
    }

    /**
     * @param string $NomInterneEtablissement
     * @return SWSLectureTaxeTransport
     */
    public function withNomInterneEtablissement($NomInterneEtablissement)
    {
        $new = clone $this;
        $new->NomInterneEtablissement = $NomInterneEtablissement;

        return $new;
    }
}

