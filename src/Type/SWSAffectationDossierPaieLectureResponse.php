<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSAffectationDossierPaieLectureResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSAffectationDossierPaieLectureResult
     */
    private $SWS_AffectationDossierPaieLectureResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSAffectationDossierPaieLectureResult
     */
    public function getSWS_AffectationDossierPaieLectureResult()
    {
        return $this->SWS_AffectationDossierPaieLectureResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSAffectationDossierPaieLectureResult $SWS_AffectationDossierPaieLectureResult
     * @return SWSAffectationDossierPaieLectureResponse
     */
    public function withSWS_AffectationDossierPaieLectureResult($SWS_AffectationDossierPaieLectureResult)
    {
        $new = clone $this;
        $new->SWS_AffectationDossierPaieLectureResult = $SWS_AffectationDossierPaieLectureResult;

        return $new;
    }
}

