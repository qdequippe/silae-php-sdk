<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSSalarieAjouterElementVariable implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieElementVariable
     */
    private $ElementVariable;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $MatriculeSalarie
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieElementVariable $ElementVariable
     */
    public function __construct($Token, $NumeroDossier, $MatriculeSalarie, $ElementVariable)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->MatriculeSalarie = $MatriculeSalarie;
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
     * @return SWSSalarieAjouterElementVariable
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
     * @return SWSSalarieAjouterElementVariable
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
     * @return SWSSalarieAjouterElementVariable
     */
    public function withMatriculeSalarie($MatriculeSalarie)
    {
        $new = clone $this;
        $new->MatriculeSalarie = $MatriculeSalarie;

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
     * @return SWSSalarieAjouterElementVariable
     */
    public function withElementVariable($ElementVariable)
    {
        $new = clone $this;
        $new->ElementVariable = $ElementVariable;

        return $new;
    }
}

