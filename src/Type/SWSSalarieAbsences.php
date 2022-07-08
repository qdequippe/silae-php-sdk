<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSSalarieAbsences implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalarieAbsences
     */
    private $RequeteSalarieAbsences;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalarieAbsences $RequeteSalarieAbsences
     */
    public function __construct($Token, $NumeroDossier, $RequeteSalarieAbsences)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->RequeteSalarieAbsences = $RequeteSalarieAbsences;
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
     * @return SWSSalarieAbsences
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
     * @return SWSSalarieAbsences
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalarieAbsences
     */
    public function getRequeteSalarieAbsences()
    {
        return $this->RequeteSalarieAbsences;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalarieAbsences $RequeteSalarieAbsences
     * @return SWSSalarieAbsences
     */
    public function withRequeteSalarieAbsences($RequeteSalarieAbsences)
    {
        $new = clone $this;
        $new->RequeteSalarieAbsences = $RequeteSalarieAbsences;

        return $new;
    }
}

