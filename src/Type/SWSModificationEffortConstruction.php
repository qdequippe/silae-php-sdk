<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSModificationEffortConstruction implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSEffortConstruction
     */
    private $EffortConstruction;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSEffortConstruction $EffortConstruction
     */
    public function __construct($Token, $NumeroDossier, $EffortConstruction)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->EffortConstruction = $EffortConstruction;
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
     * @return SWSModificationEffortConstruction
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
     * @return SWSModificationEffortConstruction
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSEffortConstruction
     */
    public function getEffortConstruction()
    {
        return $this->EffortConstruction;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSEffortConstruction $EffortConstruction
     * @return SWSModificationEffortConstruction
     */
    public function withEffortConstruction($EffortConstruction)
    {
        $new = clone $this;
        $new->EffortConstruction = $EffortConstruction;

        return $new;
    }
}

