<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSCreationDossierPaie implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSDossier
     */
    private $Dossier;

    /**
     * Constructor
     *
     * @var string $Token
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSDossier $Dossier
     */
    public function __construct($Token, $Dossier)
    {
        $this->Token = $Token;
        $this->Dossier = $Dossier;
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
     * @return SWSCreationDossierPaie
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSDossier
     */
    public function getDossier()
    {
        return $this->Dossier;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSDossier $Dossier
     * @return SWSCreationDossierPaie
     */
    public function withDossier($Dossier)
    {
        $new = clone $this;
        $new->Dossier = $Dossier;

        return $new;
    }
}

