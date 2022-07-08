<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSLectureCodeClientFacturation implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * Constructor
     *
     * @var string $Token
     */
    public function __construct($Token)
    {
        $this->Token = $Token;
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
     * @return SWSLectureCodeClientFacturation
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }
}

