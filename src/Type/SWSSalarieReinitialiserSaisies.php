<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSSalarieReinitialiserSaisies implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieReinitialisationSaisies
     */
    private $ReinitialisationSaisies;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $MatriculeSalarie
     * @var int $IdentifiantEmploi
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieReinitialisationSaisies $ReinitialisationSaisies
     */
    public function __construct($Token, $NumeroDossier, $MatriculeSalarie, $IdentifiantEmploi, $ReinitialisationSaisies)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->MatriculeSalarie = $MatriculeSalarie;
        $this->IdentifiantEmploi = $IdentifiantEmploi;
        $this->ReinitialisationSaisies = $ReinitialisationSaisies;
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
     * @return SWSSalarieReinitialiserSaisies
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
     * @return SWSSalarieReinitialiserSaisies
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
     * @return SWSSalarieReinitialiserSaisies
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
     * @return SWSSalarieReinitialiserSaisies
     */
    public function withIdentifiantEmploi($IdentifiantEmploi)
    {
        $new = clone $this;
        $new->IdentifiantEmploi = $IdentifiantEmploi;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieReinitialisationSaisies
     */
    public function getReinitialisationSaisies()
    {
        return $this->ReinitialisationSaisies;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieReinitialisationSaisies $ReinitialisationSaisies
     * @return SWSSalarieReinitialiserSaisies
     */
    public function withReinitialisationSaisies($ReinitialisationSaisies)
    {
        $new = clone $this;
        $new->ReinitialisationSaisies = $ReinitialisationSaisies;

        return $new;
    }
}

