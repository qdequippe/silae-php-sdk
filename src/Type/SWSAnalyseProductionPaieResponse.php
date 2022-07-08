<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSAnalyseProductionPaieResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSAnalyseProductionPaieResult
     */
    private $SWS_AnalyseProductionPaieResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSAnalyseProductionPaieResult
     */
    public function getSWS_AnalyseProductionPaieResult()
    {
        return $this->SWS_AnalyseProductionPaieResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSAnalyseProductionPaieResult $SWS_AnalyseProductionPaieResult
     * @return SWSAnalyseProductionPaieResponse
     */
    public function withSWS_AnalyseProductionPaieResult($SWS_AnalyseProductionPaieResult)
    {
        $new = clone $this;
        $new->SWS_AnalyseProductionPaieResult = $SWS_AnalyseProductionPaieResult;

        return $new;
    }
}

