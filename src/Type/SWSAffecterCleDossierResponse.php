<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSAffecterCleDossierResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSAffecterCleDossierResult
     */
    private $SWS_AffecterCleDossierResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSAffecterCleDossierResult
     */
    public function getSWS_AffecterCleDossierResult()
    {
        return $this->SWS_AffecterCleDossierResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSAffecterCleDossierResult $SWS_AffecterCleDossierResult
     * @return SWSAffecterCleDossierResponse
     */
    public function withSWS_AffecterCleDossierResult($SWS_AffecterCleDossierResult)
    {
        $new = clone $this;
        $new->SWS_AffecterCleDossierResult = $SWS_AffecterCleDossierResult;

        return $new;
    }
}

