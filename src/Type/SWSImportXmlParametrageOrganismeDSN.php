<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSImportXmlParametrageOrganismeDSN implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var string
     */
    private $XmlEnByteArray;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $XmlEnByteArray
     */
    public function __construct($Token, $XmlEnByteArray)
    {
        $this->Token = $Token;
        $this->XmlEnByteArray = $XmlEnByteArray;
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
     * @return SWSImportXmlParametrageOrganismeDSN
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
    public function getXmlEnByteArray()
    {
        return $this->XmlEnByteArray;
    }

    /**
     * @param string $XmlEnByteArray
     * @return SWSImportXmlParametrageOrganismeDSN
     */
    public function withXmlEnByteArray($XmlEnByteArray)
    {
        $new = clone $this;
        $new->XmlEnByteArray = $XmlEnByteArray;

        return $new;
    }
}

