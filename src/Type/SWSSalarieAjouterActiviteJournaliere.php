<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSSalarieAjouterActiviteJournaliere implements RequestInterface
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
    private $MatriculeSalarie;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieActiviteJournalierePeriode
     */
    private $ActiviteJournalierePeriode;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $MatriculeSalarie
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieActiviteJournalierePeriode $ActiviteJournalierePeriode
     */
    public function __construct($Token, $NumeroDossier, $MatriculeSalarie, $ActiviteJournalierePeriode)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->MatriculeSalarie = $MatriculeSalarie;
        $this->ActiviteJournalierePeriode = $ActiviteJournalierePeriode;
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
     * @return SWSSalarieAjouterActiviteJournaliere
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
     * @return SWSSalarieAjouterActiviteJournaliere
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
    public function getMatriculeSalarie()
    {
        return $this->MatriculeSalarie;
    }

    /**
     * @param string $MatriculeSalarie
     * @return SWSSalarieAjouterActiviteJournaliere
     */
    public function withMatriculeSalarie($MatriculeSalarie)
    {
        $new = clone $this;
        $new->MatriculeSalarie = $MatriculeSalarie;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieActiviteJournalierePeriode
     */
    public function getActiviteJournalierePeriode()
    {
        return $this->ActiviteJournalierePeriode;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieActiviteJournalierePeriode $ActiviteJournalierePeriode
     * @return SWSSalarieAjouterActiviteJournaliere
     */
    public function withActiviteJournalierePeriode($ActiviteJournalierePeriode)
    {
        $new = clone $this;
        $new->ActiviteJournalierePeriode = $ActiviteJournalierePeriode;

        return $new;
    }
}

