<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSCreationClient implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CSWSClient
     */
    private $Client;

    /**
     * Constructor
     *
     * @var string $Token
     * @var \Qdequippe\SilaePhpSdk\Type\CSWSClient $Client
     */
    public function __construct($Token, $Client)
    {
        $this->Token = $Token;
        $this->Client = $Client;
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
     * @return SWSCreationClient
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CSWSClient
     */
    public function getClient()
    {
        return $this->Client;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CSWSClient $Client
     * @return SWSCreationClient
     */
    public function withClient($Client)
    {
        $new = clone $this;
        $new->Client = $Client;

        return $new;
    }
}

