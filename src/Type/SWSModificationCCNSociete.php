<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSModificationCCNSociete implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSCCNSociete
     */
    private $CCNSociete;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSCCNSociete $CCNSociete
     */
    public function __construct($Token, $NumeroDossier, $CCNSociete)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->CCNSociete = $CCNSociete;
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
     * @return SWSModificationCCNSociete
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
     * @return SWSModificationCCNSociete
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSCCNSociete
     */
    public function getCCNSociete()
    {
        return $this->CCNSociete;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSCCNSociete $CCNSociete
     * @return SWSModificationCCNSociete
     */
    public function withCCNSociete($CCNSociete)
    {
        $new = clone $this;
        $new->CCNSociete = $CCNSociete;

        return $new;
    }
}

