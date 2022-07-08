<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSDocumentGEDSalarie implements RequestInterface
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
     * @var int
     */
    private $ID_DOCUMENT;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $Matricule
     * @var int $ID_DOCUMENT
     */
    public function __construct($Token, $NumeroDossier, $Matricule, $ID_DOCUMENT)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->Matricule = $Matricule;
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
     * @return SWSDocumentGEDSalarie
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
     * @return SWSDocumentGEDSalarie
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
     * @return SWSDocumentGEDSalarie
     */
    public function withMatricule($Matricule)
    {
        $new = clone $this;
        $new->Matricule = $Matricule;

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
     * @return SWSDocumentGEDSalarie
     */
    public function withID_DOCUMENT($ID_DOCUMENT)
    {
        $new = clone $this;
        $new->ID_DOCUMENT = $ID_DOCUMENT;

        return $new;
    }
}

