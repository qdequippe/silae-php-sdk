<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSMatriculeSalarieDepuisID implements RequestInterface
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
    private $IDSalarie;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $IDSalarie
     */
    public function __construct($Token, $NumeroDossier, $IDSalarie)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->IDSalarie = $IDSalarie;
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
     * @return SWSMatriculeSalarieDepuisID
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
     * @return SWSMatriculeSalarieDepuisID
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
    public function getIDSalarie()
    {
        return $this->IDSalarie;
    }

    /**
     * @param string $IDSalarie
     * @return SWSMatriculeSalarieDepuisID
     */
    public function withIDSalarie($IDSalarie)
    {
        $new = clone $this;
        $new->IDSalarie = $IDSalarie;

        return $new;
    }
}

