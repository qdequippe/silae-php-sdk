<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSListeSalaries implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSListeSalariesOptions
     */
    private $ListeSalariesOptions;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSListeSalariesOptions $ListeSalariesOptions
     */
    public function __construct($Token, $NumeroDossier, $ListeSalariesOptions)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->ListeSalariesOptions = $ListeSalariesOptions;
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
     * @return SWSListeSalaries
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
     * @return SWSListeSalaries
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSListeSalariesOptions
     */
    public function getListeSalariesOptions()
    {
        return $this->ListeSalariesOptions;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSListeSalariesOptions $ListeSalariesOptions
     * @return SWSListeSalaries
     */
    public function withListeSalariesOptions($ListeSalariesOptions)
    {
        $new = clone $this;
        $new->ListeSalariesOptions = $ListeSalariesOptions;

        return $new;
    }
}

