<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSListeDossiers implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var int
     */
    private $TypeDossiers;

    /**
     * Constructor
     *
     * @var string $Token
     * @var int $TypeDossiers
     */
    public function __construct($Token, $TypeDossiers)
    {
        $this->Token = $Token;
        $this->TypeDossiers = $TypeDossiers;
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
     * @return SWSListeDossiers
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return int
     */
    public function getTypeDossiers()
    {
        return $this->TypeDossiers;
    }

    /**
     * @param int $TypeDossiers
     * @return SWSListeDossiers
     */
    public function withTypeDossiers($TypeDossiers)
    {
        $new = clone $this;
        $new->TypeDossiers = $TypeDossiers;

        return $new;
    }
}

