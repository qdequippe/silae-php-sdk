<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSSalarieEmploiClassificationMetier implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var string
     */
    private $CodeClassificationMetier;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $CodeClassificationMetier
     */
    public function __construct($Token, $CodeClassificationMetier)
    {
        $this->Token = $Token;
        $this->CodeClassificationMetier = $CodeClassificationMetier;
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
     * @return SWSSalarieEmploiClassificationMetier
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
    public function getCodeClassificationMetier()
    {
        return $this->CodeClassificationMetier;
    }

    /**
     * @param string $CodeClassificationMetier
     * @return SWSSalarieEmploiClassificationMetier
     */
    public function withCodeClassificationMetier($CodeClassificationMetier)
    {
        $new = clone $this;
        $new->CodeClassificationMetier = $CodeClassificationMetier;

        return $new;
    }
}

