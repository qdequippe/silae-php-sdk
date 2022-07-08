<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSMiseAJourFicheSociete implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSocieteInfoSup
     */
    private $SocieteInfoSup;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSocieteInfoSup $SocieteInfoSup
     */
    public function __construct($Token, $NumeroDossier, $SocieteInfoSup)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->SocieteInfoSup = $SocieteInfoSup;
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
     * @return SWSMiseAJourFicheSociete
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
     * @return SWSMiseAJourFicheSociete
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSocieteInfoSup
     */
    public function getSocieteInfoSup()
    {
        return $this->SocieteInfoSup;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSocieteInfoSup $SocieteInfoSup
     * @return SWSMiseAJourFicheSociete
     */
    public function withSocieteInfoSup($SocieteInfoSup)
    {
        $new = clone $this;
        $new->SocieteInfoSup = $SocieteInfoSup;

        return $new;
    }
}

