<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSAnalyseProductionPaieDetail implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteAnalyseProductionDetail
     */
    private $RequeteAnalyseProductionDetail;

    /**
     * Constructor
     *
     * @var string $Token
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteAnalyseProductionDetail $RequeteAnalyseProductionDetail
     */
    public function __construct($Token, $RequeteAnalyseProductionDetail)
    {
        $this->Token = $Token;
        $this->RequeteAnalyseProductionDetail = $RequeteAnalyseProductionDetail;
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
     * @return SWSAnalyseProductionPaieDetail
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteAnalyseProductionDetail
     */
    public function getRequeteAnalyseProductionDetail()
    {
        return $this->RequeteAnalyseProductionDetail;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteAnalyseProductionDetail $RequeteAnalyseProductionDetail
     * @return SWSAnalyseProductionPaieDetail
     */
    public function withRequeteAnalyseProductionDetail($RequeteAnalyseProductionDetail)
    {
        $new = clone $this;
        $new->RequeteAnalyseProductionDetail = $RequeteAnalyseProductionDetail;

        return $new;
    }
}

