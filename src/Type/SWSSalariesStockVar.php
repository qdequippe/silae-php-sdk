<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSSalariesStockVar implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalariesStockVar
     */
    private $RequeteSalariesStockVar;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalariesStockVar $RequeteSalariesStockVar
     */
    public function __construct($Token, $NumeroDossier, $RequeteSalariesStockVar)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->RequeteSalariesStockVar = $RequeteSalariesStockVar;
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
     * @return SWSSalariesStockVar
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
     * @return SWSSalariesStockVar
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalariesStockVar
     */
    public function getRequeteSalariesStockVar()
    {
        return $this->RequeteSalariesStockVar;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalariesStockVar $RequeteSalariesStockVar
     * @return SWSSalariesStockVar
     */
    public function withRequeteSalariesStockVar($RequeteSalariesStockVar)
    {
        $new = clone $this;
        $new->RequeteSalariesStockVar = $RequeteSalariesStockVar;

        return $new;
    }
}

