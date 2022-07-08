<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSListeDocumentsGEDSociete implements RequestInterface
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
    private $CodeType;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $CodeType
     */
    public function __construct($Token, $NumeroDossier, $CodeType)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->CodeType = $CodeType;
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
     * @return SWSListeDocumentsGEDSociete
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
     * @return SWSListeDocumentsGEDSociete
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
    public function getCodeType()
    {
        return $this->CodeType;
    }

    /**
     * @param string $CodeType
     * @return SWSListeDocumentsGEDSociete
     */
    public function withCodeType($CodeType)
    {
        $new = clone $this;
        $new->CodeType = $CodeType;

        return $new;
    }
}

