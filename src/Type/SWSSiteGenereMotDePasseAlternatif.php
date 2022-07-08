<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSSiteGenereMotDePasseAlternatif implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var string
     */
    private $CodeUtilisateur;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $CodeUtilisateur
     */
    public function __construct($Token, $CodeUtilisateur)
    {
        $this->Token = $Token;
        $this->CodeUtilisateur = $CodeUtilisateur;
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
     * @return SWSSiteGenereMotDePasseAlternatif
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
    public function getCodeUtilisateur()
    {
        return $this->CodeUtilisateur;
    }

    /**
     * @param string $CodeUtilisateur
     * @return SWSSiteGenereMotDePasseAlternatif
     */
    public function withCodeUtilisateur($CodeUtilisateur)
    {
        $new = clone $this;
        $new->CodeUtilisateur = $CodeUtilisateur;

        return $new;
    }
}

