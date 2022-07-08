<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSCreationSalarieEmplois implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var string
     */
    private $NumeroDossier;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmplois
     */
    private $SalarieEmplois;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmplois $SalarieEmplois
     */
    public function __construct($Token, $NumeroDossier, $SalarieEmplois)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->SalarieEmplois = $SalarieEmplois;
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
     * @return SWSCreationSalarieEmplois
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
    public function getNumeroDossier()
    {
        return $this->NumeroDossier;
    }

    /**
     * @param string $NumeroDossier
     * @return SWSCreationSalarieEmplois
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmplois
     */
    public function getSalarieEmplois()
    {
        return $this->SalarieEmplois;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmplois $SalarieEmplois
     * @return SWSCreationSalarieEmplois
     */
    public function withSalarieEmplois($SalarieEmplois)
    {
        $new = clone $this;
        $new->SalarieEmplois = $SalarieEmplois;

        return $new;
    }
}

