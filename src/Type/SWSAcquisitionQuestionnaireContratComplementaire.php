<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSAcquisitionQuestionnaireContratComplementaire implements RequestInterface
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
    private $CodeStatutCategoriel;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $CodeStatutCategoriel
     */
    public function __construct($Token, $NumeroDossier, $CodeStatutCategoriel)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->CodeStatutCategoriel = $CodeStatutCategoriel;
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
     * @return SWSAcquisitionQuestionnaireContratComplementaire
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
     * @return SWSAcquisitionQuestionnaireContratComplementaire
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
    public function getCodeStatutCategoriel()
    {
        return $this->CodeStatutCategoriel;
    }

    /**
     * @param string $CodeStatutCategoriel
     * @return SWSAcquisitionQuestionnaireContratComplementaire
     */
    public function withCodeStatutCategoriel($CodeStatutCategoriel)
    {
        $new = clone $this;
        $new->CodeStatutCategoriel = $CodeStatutCategoriel;

        return $new;
    }
}

