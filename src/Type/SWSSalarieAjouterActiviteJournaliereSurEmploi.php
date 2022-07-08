<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSSalarieAjouterActiviteJournaliereSurEmploi implements RequestInterface
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
     * @var int
     */
    private $IdentifiantEmploi;

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
     * @var int $IdentifiantEmploi
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieActiviteJournalierePeriode $ActiviteJournalierePeriode
     */
    public function __construct($Token, $NumeroDossier, $MatriculeSalarie, $IdentifiantEmploi, $ActiviteJournalierePeriode)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->MatriculeSalarie = $MatriculeSalarie;
        $this->IdentifiantEmploi = $IdentifiantEmploi;
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
     * @return SWSSalarieAjouterActiviteJournaliereSurEmploi
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
     * @return SWSSalarieAjouterActiviteJournaliereSurEmploi
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
     * @return SWSSalarieAjouterActiviteJournaliereSurEmploi
     */
    public function withMatriculeSalarie($MatriculeSalarie)
    {
        $new = clone $this;
        $new->MatriculeSalarie = $MatriculeSalarie;

        return $new;
    }

    /**
     * @return int
     */
    public function getIdentifiantEmploi()
    {
        return $this->IdentifiantEmploi;
    }

    /**
     * @param int $IdentifiantEmploi
     * @return SWSSalarieAjouterActiviteJournaliereSurEmploi
     */
    public function withIdentifiantEmploi($IdentifiantEmploi)
    {
        $new = clone $this;
        $new->IdentifiantEmploi = $IdentifiantEmploi;

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
     * @return SWSSalarieAjouterActiviteJournaliereSurEmploi
     */
    public function withActiviteJournalierePeriode($ActiviteJournalierePeriode)
    {
        $new = clone $this;
        $new->ActiviteJournalierePeriode = $ActiviteJournalierePeriode;

        return $new;
    }
}

