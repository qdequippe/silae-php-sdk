<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSEtatDeclarations implements RequestInterface
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
    private $TypeDeclaration;

    /**
     * @var \DateTimeInterface
     */
    private $Periode;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $TypeDeclaration
     * @var \DateTimeInterface $Periode
     */
    public function __construct($Token, $NumeroDossier, $TypeDeclaration, $Periode)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->TypeDeclaration = $TypeDeclaration;
        $this->Periode = $Periode;
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
     * @return SWSEtatDeclarations
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
     * @return SWSEtatDeclarations
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
    public function getTypeDeclaration()
    {
        return $this->TypeDeclaration;
    }

    /**
     * @param string $TypeDeclaration
     * @return SWSEtatDeclarations
     */
    public function withTypeDeclaration($TypeDeclaration)
    {
        $new = clone $this;
        $new->TypeDeclaration = $TypeDeclaration;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPeriode()
    {
        return $this->Periode;
    }

    /**
     * @param \DateTimeInterface $Periode
     * @return SWSEtatDeclarations
     */
    public function withPeriode($Periode)
    {
        $new = clone $this;
        $new->Periode = $Periode;

        return $new;
    }
}

