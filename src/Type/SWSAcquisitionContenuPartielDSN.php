<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSAcquisitionContenuPartielDSN implements RequestInterface
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
     * @var string
     */
    private $NomInterneEtablissement;

    /**
     * @var string
     */
    private $CodeOrganisme;

    /**
     * @var string
     */
    private $NumeroAffiliation;

    /**
     * @var int
     */
    private $TypeDSN;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $Segments;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \DateTimeInterface $Periode
     * @var string $NomInterneEtablissement
     * @var string $CodeOrganisme
     * @var string $NumeroAffiliation
     * @var int $TypeDSN
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString $Segments
     */
    public function __construct($Token, $NumeroDossier, $Periode, $NomInterneEtablissement, $CodeOrganisme, $NumeroAffiliation, $TypeDSN, $Segments)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->Periode = $Periode;
        $this->NomInterneEtablissement = $NomInterneEtablissement;
        $this->CodeOrganisme = $CodeOrganisme;
        $this->NumeroAffiliation = $NumeroAffiliation;
        $this->TypeDSN = $TypeDSN;
        $this->Segments = $Segments;
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
     * @return SWSAcquisitionContenuPartielDSN
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
     * @return SWSAcquisitionContenuPartielDSN
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
     * @return SWSAcquisitionContenuPartielDSN
     */
    public function withPeriode($Periode)
    {
        $new = clone $this;
        $new->Periode = $Periode;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomInterneEtablissement()
    {
        return $this->NomInterneEtablissement;
    }

    /**
     * @param string $NomInterneEtablissement
     * @return SWSAcquisitionContenuPartielDSN
     */
    public function withNomInterneEtablissement($NomInterneEtablissement)
    {
        $new = clone $this;
        $new->NomInterneEtablissement = $NomInterneEtablissement;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeOrganisme()
    {
        return $this->CodeOrganisme;
    }

    /**
     * @param string $CodeOrganisme
     * @return SWSAcquisitionContenuPartielDSN
     */
    public function withCodeOrganisme($CodeOrganisme)
    {
        $new = clone $this;
        $new->CodeOrganisme = $CodeOrganisme;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumeroAffiliation()
    {
        return $this->NumeroAffiliation;
    }

    /**
     * @param string $NumeroAffiliation
     * @return SWSAcquisitionContenuPartielDSN
     */
    public function withNumeroAffiliation($NumeroAffiliation)
    {
        $new = clone $this;
        $new->NumeroAffiliation = $NumeroAffiliation;

        return $new;
    }

    /**
     * @return int
     */
    public function getTypeDSN()
    {
        return $this->TypeDSN;
    }

    /**
     * @param int $TypeDSN
     * @return SWSAcquisitionContenuPartielDSN
     */
    public function withTypeDSN($TypeDSN)
    {
        $new = clone $this;
        $new->TypeDSN = $TypeDSN;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getSegments()
    {
        return $this->Segments;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $Segments
     * @return SWSAcquisitionContenuPartielDSN
     */
    public function withSegments($Segments)
    {
        $new = clone $this;
        $new->Segments = $Segments;

        return $new;
    }
}

