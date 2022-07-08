<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSListeDocumentsGEDSalarie implements RequestInterface
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
    private $Matricule;

    /**
     * @var string
     */
    private $CodeType;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $Matricule
     * @var string $CodeType
     */
    public function __construct($Token, $NumeroDossier, $Matricule, $CodeType)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->Matricule = $Matricule;
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
     * @return SWSListeDocumentsGEDSalarie
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
     * @return SWSListeDocumentsGEDSalarie
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
    public function getMatricule()
    {
        return $this->Matricule;
    }

    /**
     * @param string $Matricule
     * @return SWSListeDocumentsGEDSalarie
     */
    public function withMatricule($Matricule)
    {
        $new = clone $this;
        $new->Matricule = $Matricule;

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
     * @return SWSListeDocumentsGEDSalarie
     */
    public function withCodeType($CodeType)
    {
        $new = clone $this;
        $new->CodeType = $CodeType;

        return $new;
    }
}

