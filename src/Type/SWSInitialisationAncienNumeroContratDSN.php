<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSInitialisationAncienNumeroContratDSN implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSInitialisationAncienNumeroContratDSN
     */
    private $InitAncienContratDSN;

    /**
     * Constructor
     *
     * @var string $Token
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSInitialisationAncienNumeroContratDSN $InitAncienContratDSN
     */
    public function __construct($Token, $InitAncienContratDSN)
    {
        $this->Token = $Token;
        $this->InitAncienContratDSN = $InitAncienContratDSN;
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
     * @return SWSInitialisationAncienNumeroContratDSN
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSInitialisationAncienNumeroContratDSN
     */
    public function getInitAncienContratDSN()
    {
        return $this->InitAncienContratDSN;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSInitialisationAncienNumeroContratDSN $InitAncienContratDSN
     * @return SWSInitialisationAncienNumeroContratDSN
     */
    public function withInitAncienContratDSN($InitAncienContratDSN)
    {
        $new = clone $this;
        $new->InitAncienContratDSN = $InitAncienContratDSN;

        return $new;
    }
}

