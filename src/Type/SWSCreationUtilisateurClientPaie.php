<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSCreationUtilisateurClientPaie implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurClient
     */
    private $UtilisateurClient;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurClient $UtilisateurClient
     */
    public function __construct($Token, $NumeroDossier, $UtilisateurClient)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->UtilisateurClient = $UtilisateurClient;
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
     * @return SWSCreationUtilisateurClientPaie
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
     * @return SWSCreationUtilisateurClientPaie
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurClient
     */
    public function getUtilisateurClient()
    {
        return $this->UtilisateurClient;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurClient $UtilisateurClient
     * @return SWSCreationUtilisateurClientPaie
     */
    public function withUtilisateurClient($UtilisateurClient)
    {
        $new = clone $this;
        $new->UtilisateurClient = $UtilisateurClient;

        return $new;
    }
}

