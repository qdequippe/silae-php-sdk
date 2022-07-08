<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSModificationFNAL implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSFNAL
     */
    private $FNAL;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSFNAL $FNAL
     */
    public function __construct($Token, $NumeroDossier, $FNAL)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->FNAL = $FNAL;
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
     * @return SWSModificationFNAL
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
     * @return SWSModificationFNAL
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSFNAL
     */
    public function getFNAL()
    {
        return $this->FNAL;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSFNAL $FNAL
     * @return SWSModificationFNAL
     */
    public function withFNAL($FNAL)
    {
        $new = clone $this;
        $new->FNAL = $FNAL;

        return $new;
    }
}

