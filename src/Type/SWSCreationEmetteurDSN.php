<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSCreationEmetteurDSN implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSEmetteurDSN
     */
    private $Emetteur;

    /**
     * Constructor
     *
     * @var string $Token
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSEmetteurDSN $Emetteur
     */
    public function __construct($Token, $Emetteur)
    {
        $this->Token = $Token;
        $this->Emetteur = $Emetteur;
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
     * @return SWSCreationEmetteurDSN
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSEmetteurDSN
     */
    public function getEmetteur()
    {
        return $this->Emetteur;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSEmetteurDSN $Emetteur
     * @return SWSCreationEmetteurDSN
     */
    public function withEmetteur($Emetteur)
    {
        $new = clone $this;
        $new->Emetteur = $Emetteur;

        return $new;
    }
}

