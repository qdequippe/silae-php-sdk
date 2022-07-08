<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSAnalyseProductionPaieDetailResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSAnalyseProductionPaieDetailResult
     */
    private $SWS_AnalyseProductionPaieDetailResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSAnalyseProductionPaieDetailResult
     */
    public function getSWS_AnalyseProductionPaieDetailResult()
    {
        return $this->SWS_AnalyseProductionPaieDetailResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSAnalyseProductionPaieDetailResult $SWS_AnalyseProductionPaieDetailResult
     * @return SWSAnalyseProductionPaieDetailResponse
     */
    public function withSWS_AnalyseProductionPaieDetailResult($SWS_AnalyseProductionPaieDetailResult)
    {
        $new = clone $this;
        $new->SWS_AnalyseProductionPaieDetailResult = $SWS_AnalyseProductionPaieDetailResult;

        return $new;
    }
}

