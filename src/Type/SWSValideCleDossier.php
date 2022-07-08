<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSValideCleDossier implements RequestInterface
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
     * @var string
     */
    private $Cle;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $Cle
     */
    public function __construct($Token, $NumeroDossier, $Cle)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->Cle = $Cle;
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
     * @return SWSValideCleDossier
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
     * @return SWSValideCleDossier
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return string
     */
    public function getCle()
    {
        return $this->Cle;
    }

    /**
     * @param string $Cle
     * @return SWSValideCleDossier
     */
    public function withCle($Cle)
    {
        $new = clone $this;
        $new->Cle = $Cle;

        return $new;
    }
}

