<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSActivationDSN implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSActivationDSN
     */
    private $ActivationDSN;

    /**
     * Constructor
     *
     * @var string $Token
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSActivationDSN $ActivationDSN
     */
    public function __construct($Token, $ActivationDSN)
    {
        $this->Token = $Token;
        $this->ActivationDSN = $ActivationDSN;
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
     * @return SWSActivationDSN
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSActivationDSN
     */
    public function getActivationDSN()
    {
        return $this->ActivationDSN;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSActivationDSN $ActivationDSN
     * @return SWSActivationDSN
     */
    public function withActivationDSN($ActivationDSN)
    {
        $new = clone $this;
        $new->ActivationDSN = $ActivationDSN;

        return $new;
    }
}

