<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSDocumentGEDSociete implements RequestInterface
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
     * @var int
     */
    private $ID_DOCUMENT;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var int $ID_DOCUMENT
     */
    public function __construct($Token, $NumeroDossier, $ID_DOCUMENT)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->ID_DOCUMENT = $ID_DOCUMENT;
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
     * @return SWSDocumentGEDSociete
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
     * @return SWSDocumentGEDSociete
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return int
     */
    public function getID_DOCUMENT()
    {
        return $this->ID_DOCUMENT;
    }

    /**
     * @param int $ID_DOCUMENT
     * @return SWSDocumentGEDSociete
     */
    public function withID_DOCUMENT($ID_DOCUMENT)
    {
        $new = clone $this;
        $new->ID_DOCUMENT = $ID_DOCUMENT;

        return $new;
    }
}

