<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSSalarieAjouterElementVariableSurEmploi implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieElementVariable
     */
    private $ElementVariable;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $MatriculeSalarie
     * @var int $IdentifiantEmploi
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieElementVariable $ElementVariable
     */
    public function __construct($Token, $NumeroDossier, $MatriculeSalarie, $IdentifiantEmploi, $ElementVariable)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->MatriculeSalarie = $MatriculeSalarie;
        $this->IdentifiantEmploi = $IdentifiantEmploi;
        $this->ElementVariable = $ElementVariable;
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
     * @return SWSSalarieAjouterElementVariableSurEmploi
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
     * @return SWSSalarieAjouterElementVariableSurEmploi
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
     * @return SWSSalarieAjouterElementVariableSurEmploi
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
     * @return SWSSalarieAjouterElementVariableSurEmploi
     */
    public function withIdentifiantEmploi($IdentifiantEmploi)
    {
        $new = clone $this;
        $new->IdentifiantEmploi = $IdentifiantEmploi;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieElementVariable
     */
    public function getElementVariable()
    {
        return $this->ElementVariable;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieElementVariable $ElementVariable
     * @return SWSSalarieAjouterElementVariableSurEmploi
     */
    public function withElementVariable($ElementVariable)
    {
        $new = clone $this;
        $new->ElementVariable = $ElementVariable;

        return $new;
    }
}

