<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSRecupererFichiersVirementsChiffres implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $MatriculeSalaries;

    /**
     * @var \DateTimeInterface
     */
    private $Periode;

    /**
     * @var \DateTimeInterface
     */
    private $DateValeur;

    /**
     * @var string
     */
    private $LibelleVirement;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ProprietesChiffrement
     */
    private $ProprietesChiffrement;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString $MatriculeSalaries
     * @var \DateTimeInterface $Periode
     * @var \DateTimeInterface $DateValeur
     * @var string $LibelleVirement
     * @var \Qdequippe\SilaePhpSdk\Type\ProprietesChiffrement $ProprietesChiffrement
     */
    public function __construct($Token, $NumeroDossier, $MatriculeSalaries, $Periode, $DateValeur, $LibelleVirement, $ProprietesChiffrement)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->MatriculeSalaries = $MatriculeSalaries;
        $this->Periode = $Periode;
        $this->DateValeur = $DateValeur;
        $this->LibelleVirement = $LibelleVirement;
        $this->ProprietesChiffrement = $ProprietesChiffrement;
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
     * @return SWSRecupererFichiersVirementsChiffres
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
     * @return SWSRecupererFichiersVirementsChiffres
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getMatriculeSalaries()
    {
        return $this->MatriculeSalaries;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $MatriculeSalaries
     * @return SWSRecupererFichiersVirementsChiffres
     */
    public function withMatriculeSalaries($MatriculeSalaries)
    {
        $new = clone $this;
        $new->MatriculeSalaries = $MatriculeSalaries;

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
     * @return SWSRecupererFichiersVirementsChiffres
     */
    public function withPeriode($Periode)
    {
        $new = clone $this;
        $new->Periode = $Periode;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateValeur()
    {
        return $this->DateValeur;
    }

    /**
     * @param \DateTimeInterface $DateValeur
     * @return SWSRecupererFichiersVirementsChiffres
     */
    public function withDateValeur($DateValeur)
    {
        $new = clone $this;
        $new->DateValeur = $DateValeur;

        return $new;
    }

    /**
     * @return string
     */
    public function getLibelleVirement()
    {
        return $this->LibelleVirement;
    }

    /**
     * @param string $LibelleVirement
     * @return SWSRecupererFichiersVirementsChiffres
     */
    public function withLibelleVirement($LibelleVirement)
    {
        $new = clone $this;
        $new->LibelleVirement = $LibelleVirement;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ProprietesChiffrement
     */
    public function getProprietesChiffrement()
    {
        return $this->ProprietesChiffrement;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ProprietesChiffrement $ProprietesChiffrement
     * @return SWSRecupererFichiersVirementsChiffres
     */
    public function withProprietesChiffrement($ProprietesChiffrement)
    {
        $new = clone $this;
        $new->ProprietesChiffrement = $ProprietesChiffrement;

        return $new;
    }
}

