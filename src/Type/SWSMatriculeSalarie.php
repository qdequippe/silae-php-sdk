<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSMatriculeSalarie implements RequestInterface
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
    private $MatriculeInterneSalarie;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $MatriculeInterneSalarie
     */
    public function __construct($Token, $NumeroDossier, $MatriculeInterneSalarie)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->MatriculeInterneSalarie = $MatriculeInterneSalarie;
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
     * @return SWSMatriculeSalarie
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
     * @return SWSMatriculeSalarie
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
    public function getMatriculeInterneSalarie()
    {
        return $this->MatriculeInterneSalarie;
    }

    /**
     * @param string $MatriculeInterneSalarie
     * @return SWSMatriculeSalarie
     */
    public function withMatriculeInterneSalarie($MatriculeInterneSalarie)
    {
        $new = clone $this;
        $new->MatriculeInterneSalarie = $MatriculeInterneSalarie;

        return $new;
    }
}

