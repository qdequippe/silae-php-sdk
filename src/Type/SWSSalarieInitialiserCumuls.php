<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSSalarieInitialiserCumuls implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieCumuls
     */
    private $SalarieCumuls;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $MatriculeSalarie
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieCumuls $SalarieCumuls
     */
    public function __construct($Token, $NumeroDossier, $MatriculeSalarie, $SalarieCumuls)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->MatriculeSalarie = $MatriculeSalarie;
        $this->SalarieCumuls = $SalarieCumuls;
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
     * @return SWSSalarieInitialiserCumuls
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
     * @return SWSSalarieInitialiserCumuls
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
     * @return SWSSalarieInitialiserCumuls
     */
    public function withMatriculeSalarie($MatriculeSalarie)
    {
        $new = clone $this;
        $new->MatriculeSalarie = $MatriculeSalarie;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieCumuls
     */
    public function getSalarieCumuls()
    {
        return $this->SalarieCumuls;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieCumuls $SalarieCumuls
     * @return SWSSalarieInitialiserCumuls
     */
    public function withSalarieCumuls($SalarieCumuls)
    {
        $new = clone $this;
        $new->SalarieCumuls = $SalarieCumuls;

        return $new;
    }
}

