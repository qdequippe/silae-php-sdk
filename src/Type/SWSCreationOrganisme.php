<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSCreationOrganisme implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSOrganisme
     */
    private $Organisme;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSOrganisme $Organisme
     */
    public function __construct($Token, $NumeroDossier, $Organisme)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->Organisme = $Organisme;
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
     * @return SWSCreationOrganisme
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
     * @return SWSCreationOrganisme
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSOrganisme
     */
    public function getOrganisme()
    {
        return $this->Organisme;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSOrganisme $Organisme
     * @return SWSCreationOrganisme
     */
    public function withOrganisme($Organisme)
    {
        $new = clone $this;
        $new->Organisme = $Organisme;

        return $new;
    }
}

