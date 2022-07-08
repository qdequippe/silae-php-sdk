<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSListeMatriculesDupliques implements RequestInterface
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
    private $FiltreMatricule;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $FiltreMatricule
     */
    public function __construct($Token, $NumeroDossier, $FiltreMatricule)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->FiltreMatricule = $FiltreMatricule;
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
     * @return SWSListeMatriculesDupliques
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
     * @return SWSListeMatriculesDupliques
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
    public function getFiltreMatricule()
    {
        return $this->FiltreMatricule;
    }

    /**
     * @param string $FiltreMatricule
     * @return SWSListeMatriculesDupliques
     */
    public function withFiltreMatricule($FiltreMatricule)
    {
        $new = clone $this;
        $new->FiltreMatricule = $FiltreMatricule;

        return $new;
    }
}

