<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSAnalyseProductionPaieEntreesSortiesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSAnalyseProductionPaieEntreesSortiesResult
     */
    private $SWS_AnalyseProductionPaieEntreesSortiesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSAnalyseProductionPaieEntreesSortiesResult
     */
    public function getSWS_AnalyseProductionPaieEntreesSortiesResult()
    {
        return $this->SWS_AnalyseProductionPaieEntreesSortiesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSAnalyseProductionPaieEntreesSortiesResult $SWS_AnalyseProductionPaieEntreesSortiesResult
     * @return SWSAnalyseProductionPaieEntreesSortiesResponse
     */
    public function withSWS_AnalyseProductionPaieEntreesSortiesResult($SWS_AnalyseProductionPaieEntreesSortiesResult)
    {
        $new = clone $this;
        $new->SWS_AnalyseProductionPaieEntreesSortiesResult = $SWS_AnalyseProductionPaieEntreesSortiesResult;

        return $new;
    }
}

