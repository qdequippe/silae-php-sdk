<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSEnregistrerVisiteMedicale implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSVisiteMedicale
     */
    private $VisiteMedicale;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSVisiteMedicale $VisiteMedicale
     */
    public function __construct($Token, $NumeroDossier, $VisiteMedicale)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->VisiteMedicale = $VisiteMedicale;
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
     * @return SWSEnregistrerVisiteMedicale
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
     * @return SWSEnregistrerVisiteMedicale
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSVisiteMedicale
     */
    public function getVisiteMedicale()
    {
        return $this->VisiteMedicale;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSVisiteMedicale $VisiteMedicale
     * @return SWSEnregistrerVisiteMedicale
     */
    public function withVisiteMedicale($VisiteMedicale)
    {
        $new = clone $this;
        $new->VisiteMedicale = $VisiteMedicale;

        return $new;
    }
}

