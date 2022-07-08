<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSModificationTaxeTransport implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSTaxeTransport
     */
    private $TaxeTransport;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $NomInterneEtablissement
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSTaxeTransport $TaxeTransport
     */
    public function __construct($Token, $NumeroDossier, $NomInterneEtablissement, $TaxeTransport)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->NomInterneEtablissement = $NomInterneEtablissement;
        $this->TaxeTransport = $TaxeTransport;
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
     * @return SWSModificationTaxeTransport
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
     * @return SWSModificationTaxeTransport
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
     * @return SWSModificationTaxeTransport
     */
    public function withNomInterneEtablissement($NomInterneEtablissement)
    {
        $new = clone $this;
        $new->NomInterneEtablissement = $NomInterneEtablissement;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSTaxeTransport
     */
    public function getTaxeTransport()
    {
        return $this->TaxeTransport;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSTaxeTransport $TaxeTransport
     * @return SWSModificationTaxeTransport
     */
    public function withTaxeTransport($TaxeTransport)
    {
        $new = clone $this;
        $new->TaxeTransport = $TaxeTransport;

        return $new;
    }
}

