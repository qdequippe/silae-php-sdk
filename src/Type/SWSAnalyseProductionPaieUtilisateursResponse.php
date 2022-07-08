<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSAnalyseProductionPaieUtilisateursResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSAnalyseProductionPaieUtilisateursResult
     */
    private $SWS_AnalyseProductionPaieUtilisateursResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSAnalyseProductionPaieUtilisateursResult
     */
    public function getSWS_AnalyseProductionPaieUtilisateursResult()
    {
        return $this->SWS_AnalyseProductionPaieUtilisateursResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSAnalyseProductionPaieUtilisateursResult $SWS_AnalyseProductionPaieUtilisateursResult
     * @return SWSAnalyseProductionPaieUtilisateursResponse
     */
    public function withSWS_AnalyseProductionPaieUtilisateursResult($SWS_AnalyseProductionPaieUtilisateursResult)
    {
        $new = clone $this;
        $new->SWS_AnalyseProductionPaieUtilisateursResult = $SWS_AnalyseProductionPaieUtilisateursResult;

        return $new;
    }
}

