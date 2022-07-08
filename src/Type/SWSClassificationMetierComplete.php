<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSClassificationMetierComplete implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var string
     */
    private $CodeConventionCollective;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $CodeConventionCollective
     */
    public function __construct($Token, $CodeConventionCollective)
    {
        $this->Token = $Token;
        $this->CodeConventionCollective = $CodeConventionCollective;
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
     * @return SWSClassificationMetierComplete
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
    public function getCodeConventionCollective()
    {
        return $this->CodeConventionCollective;
    }

    /**
     * @param string $CodeConventionCollective
     * @return SWSClassificationMetierComplete
     */
    public function withCodeConventionCollective($CodeConventionCollective)
    {
        $new = clone $this;
        $new->CodeConventionCollective = $CodeConventionCollective;

        return $new;
    }
}

