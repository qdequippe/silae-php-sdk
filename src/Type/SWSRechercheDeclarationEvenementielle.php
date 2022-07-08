<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSRechercheDeclarationEvenementielle implements RequestInterface
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
     * @var \DateTimeInterface
     */
    private $Periode;

    /**
     * @var int
     */
    private $EtatDeclaration;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \DateTimeInterface $Periode
     * @var int $EtatDeclaration
     */
    public function __construct($Token, $NumeroDossier, $Periode, $EtatDeclaration)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->Periode = $Periode;
        $this->EtatDeclaration = $EtatDeclaration;
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
     * @return SWSRechercheDeclarationEvenementielle
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
     * @return SWSRechercheDeclarationEvenementielle
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

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
     * @return SWSRechercheDeclarationEvenementielle
     */
    public function withPeriode($Periode)
    {
        $new = clone $this;
        $new->Periode = $Periode;

        return $new;
    }

    /**
     * @return int
     */
    public function getEtatDeclaration()
    {
        return $this->EtatDeclaration;
    }

    /**
     * @param int $EtatDeclaration
     * @return SWSRechercheDeclarationEvenementielle
     */
    public function withEtatDeclaration($EtatDeclaration)
    {
        $new = clone $this;
        $new->EtatDeclaration = $EtatDeclaration;

        return $new;
    }
}

