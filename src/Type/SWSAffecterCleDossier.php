<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSAffecterCleDossier implements RequestInterface
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
    private $NouvelleCle;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $NouvelleCle
     */
    public function __construct($Token, $NumeroDossier, $NouvelleCle)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->NouvelleCle = $NouvelleCle;
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
     * @return SWSAffecterCleDossier
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
     * @return SWSAffecterCleDossier
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
    public function getNouvelleCle()
    {
        return $this->NouvelleCle;
    }

    /**
     * @param string $NouvelleCle
     * @return SWSAffecterCleDossier
     */
    public function withNouvelleCle($NouvelleCle)
    {
        $new = clone $this;
        $new->NouvelleCle = $NouvelleCle;

        return $new;
    }
}

