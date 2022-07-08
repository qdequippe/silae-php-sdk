<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSAnalyseProductionPaie implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteAnalyseProduction
     */
    private $RequeteAnalyseProduction;

    /**
     * Constructor
     *
     * @var string $Token
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteAnalyseProduction $RequeteAnalyseProduction
     */
    public function __construct($Token, $RequeteAnalyseProduction)
    {
        $this->Token = $Token;
        $this->RequeteAnalyseProduction = $RequeteAnalyseProduction;
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
     * @return SWSAnalyseProductionPaie
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteAnalyseProduction
     */
    public function getRequeteAnalyseProduction()
    {
        return $this->RequeteAnalyseProduction;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteAnalyseProduction $RequeteAnalyseProduction
     * @return SWSAnalyseProductionPaie
     */
    public function withRequeteAnalyseProduction($RequeteAnalyseProduction)
    {
        $new = clone $this;
        $new->RequeteAnalyseProduction = $RequeteAnalyseProduction;

        return $new;
    }
}

