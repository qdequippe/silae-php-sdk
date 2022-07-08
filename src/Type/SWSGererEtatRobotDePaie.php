<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSGererEtatRobotDePaie implements RequestInterface
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
     * @var bool
     */
    private $Desactiver;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var bool $Desactiver
     */
    public function __construct($Token, $NumeroDossier, $Desactiver)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->Desactiver = $Desactiver;
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
     * @return SWSGererEtatRobotDePaie
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
     * @return SWSGererEtatRobotDePaie
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDesactiver()
    {
        return $this->Desactiver;
    }

    /**
     * @param bool $Desactiver
     * @return SWSGererEtatRobotDePaie
     */
    public function withDesactiver($Desactiver)
    {
        $new = clone $this;
        $new->Desactiver = $Desactiver;

        return $new;
    }
}

