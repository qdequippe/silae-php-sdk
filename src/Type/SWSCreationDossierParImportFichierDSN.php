<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSCreationDossierParImportFichierDSN implements RequestInterface
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
    private $NumeroDossier;

    /**
     * @var \DateTimeInterface
     */
    private $PeriodeMin;

    /**
     * @var \DateTimeInterface
     */
    private $PeriodeMax;

    /**
     * @var bool
     */
    private $DernierFichier;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $DsnEnByteArray
     * @var string $NumeroDossier
     * @var \DateTimeInterface $PeriodeMin
     * @var \DateTimeInterface $PeriodeMax
     * @var bool $DernierFichier
     */
    public function __construct($Token, $DsnEnByteArray, $NumeroDossier, $PeriodeMin, $PeriodeMax, $DernierFichier)
    {
        $this->Token = $Token;
        $this->DsnEnByteArray = $DsnEnByteArray;
        $this->NumeroDossier = $NumeroDossier;
        $this->PeriodeMin = $PeriodeMin;
        $this->PeriodeMax = $PeriodeMax;
        $this->DernierFichier = $DernierFichier;
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
     * @return SWSCreationDossierParImportFichierDSN
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
     * @return SWSCreationDossierParImportFichierDSN
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
    public function getNumeroDossier()
    {
        return $this->NumeroDossier;
    }

    /**
     * @param string $NumeroDossier
     * @return SWSCreationDossierParImportFichierDSN
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
    public function getPeriodeMin()
    {
        return $this->PeriodeMin;
    }

    /**
     * @param \DateTimeInterface $PeriodeMin
     * @return SWSCreationDossierParImportFichierDSN
     */
    public function withPeriodeMin($PeriodeMin)
    {
        $new = clone $this;
        $new->PeriodeMin = $PeriodeMin;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeMax()
    {
        return $this->PeriodeMax;
    }

    /**
     * @param \DateTimeInterface $PeriodeMax
     * @return SWSCreationDossierParImportFichierDSN
     */
    public function withPeriodeMax($PeriodeMax)
    {
        $new = clone $this;
        $new->PeriodeMax = $PeriodeMax;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDernierFichier()
    {
        return $this->DernierFichier;
    }

    /**
     * @param bool $DernierFichier
     * @return SWSCreationDossierParImportFichierDSN
     */
    public function withDernierFichier($DernierFichier)
    {
        $new = clone $this;
        $new->DernierFichier = $DernierFichier;

        return $new;
    }
}

