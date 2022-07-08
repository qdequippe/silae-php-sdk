<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSImportFichierDSN implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var string
     */
    private $DsnEnByteArray;

    /**
     * @var string
     */
    private $NumeroDossierSiCreation;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $DsnEnByteArray
     * @var string $NumeroDossierSiCreation
     */
    public function __construct($Token, $DsnEnByteArray, $NumeroDossierSiCreation)
    {
        $this->Token = $Token;
        $this->DsnEnByteArray = $DsnEnByteArray;
        $this->NumeroDossierSiCreation = $NumeroDossierSiCreation;
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
     * @return SWSImportFichierDSN
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
    public function getDsnEnByteArray()
    {
        return $this->DsnEnByteArray;
    }

    /**
     * @param string $DsnEnByteArray
     * @return SWSImportFichierDSN
     */
    public function withDsnEnByteArray($DsnEnByteArray)
    {
        $new = clone $this;
        $new->DsnEnByteArray = $DsnEnByteArray;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumeroDossierSiCreation()
    {
        return $this->NumeroDossierSiCreation;
    }

    /**
     * @param string $NumeroDossierSiCreation
     * @return SWSImportFichierDSN
     */
    public function withNumeroDossierSiCreation($NumeroDossierSiCreation)
    {
        $new = clone $this;
        $new->NumeroDossierSiCreation = $NumeroDossierSiCreation;

        return $new;
    }
}

