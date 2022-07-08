<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSAdministrationCollaborateurLecture implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var string
     */
    private $CodeCollaborateur;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $CodeCollaborateur
     */
    public function __construct($Token, $CodeCollaborateur)
    {
        $this->Token = $Token;
        $this->CodeCollaborateur = $CodeCollaborateur;
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
     * @return SWSAdministrationCollaborateurLecture
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
    public function getCodeCollaborateur()
    {
        return $this->CodeCollaborateur;
    }

    /**
     * @param string $CodeCollaborateur
     * @return SWSAdministrationCollaborateurLecture
     */
    public function withCodeCollaborateur($CodeCollaborateur)
    {
        $new = clone $this;
        $new->CodeCollaborateur = $CodeCollaborateur;

        return $new;
    }
}

