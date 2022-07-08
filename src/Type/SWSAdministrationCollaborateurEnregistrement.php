<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSAdministrationCollaborateurEnregistrement implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CSWSUtilisateurCollaborateur
     */
    private $UtilisateurCollaborateur;

    /**
     * Constructor
     *
     * @var string $Token
     * @var \Qdequippe\SilaePhpSdk\Type\CSWSUtilisateurCollaborateur $UtilisateurCollaborateur
     */
    public function __construct($Token, $UtilisateurCollaborateur)
    {
        $this->Token = $Token;
        $this->UtilisateurCollaborateur = $UtilisateurCollaborateur;
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
     * @return SWSAdministrationCollaborateurEnregistrement
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CSWSUtilisateurCollaborateur
     */
    public function getUtilisateurCollaborateur()
    {
        return $this->UtilisateurCollaborateur;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CSWSUtilisateurCollaborateur $UtilisateurCollaborateur
     * @return SWSAdministrationCollaborateurEnregistrement
     */
    public function withUtilisateurCollaborateur($UtilisateurCollaborateur)
    {
        $new = clone $this;
        $new->UtilisateurCollaborateur = $UtilisateurCollaborateur;

        return $new;
    }
}

