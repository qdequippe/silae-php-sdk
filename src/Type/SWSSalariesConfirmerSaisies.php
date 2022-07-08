<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSSalariesConfirmerSaisies implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalariesConfirmerSaisies
     */
    private $ConfirmationSaisies;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalariesConfirmerSaisies $ConfirmationSaisies
     */
    public function __construct($Token, $NumeroDossier, $ConfirmationSaisies)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->ConfirmationSaisies = $ConfirmationSaisies;
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
     * @return SWSSalariesConfirmerSaisies
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
     * @return SWSSalariesConfirmerSaisies
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalariesConfirmerSaisies
     */
    public function getConfirmationSaisies()
    {
        return $this->ConfirmationSaisies;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalariesConfirmerSaisies $ConfirmationSaisies
     * @return SWSSalariesConfirmerSaisies
     */
    public function withConfirmationSaisies($ConfirmationSaisies)
    {
        $new = clone $this;
        $new->ConfirmationSaisies = $ConfirmationSaisies;

        return $new;
    }
}

