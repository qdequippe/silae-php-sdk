<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSGererCycleDePaie implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSDossierTache
     */
    private $DossierTache;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSDossierTache $DossierTache
     */
    public function __construct($Token, $NumeroDossier, $DossierTache)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->DossierTache = $DossierTache;
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
     * @return SWSGererCycleDePaie
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
     * @return SWSGererCycleDePaie
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSDossierTache
     */
    public function getDossierTache()
    {
        return $this->DossierTache;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSDossierTache $DossierTache
     * @return SWSGererCycleDePaie
     */
    public function withDossierTache($DossierTache)
    {
        $new = clone $this;
        $new->DossierTache = $DossierTache;

        return $new;
    }
}

