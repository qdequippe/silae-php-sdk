<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSRechercheCCN implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSCritereRechercheCCN
     */
    private $Critere;

    /**
     * Constructor
     *
     * @var string $Token
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSCritereRechercheCCN $Critere
     */
    public function __construct($Token, $Critere)
    {
        $this->Token = $Token;
        $this->Critere = $Critere;
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
     * @return SWSRechercheCCN
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSCritereRechercheCCN
     */
    public function getCritere()
    {
        return $this->Critere;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSCritereRechercheCCN $Critere
     * @return SWSRechercheCCN
     */
    public function withCritere($Critere)
    {
        $new = clone $this;
        $new->Critere = $Critere;

        return $new;
    }
}

