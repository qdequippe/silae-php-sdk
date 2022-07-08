<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSValideCleDossierResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSValideCleDossierResult
     */
    private $SWS_ValideCleDossierResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSValideCleDossierResult
     */
    public function getSWS_ValideCleDossierResult()
    {
        return $this->SWS_ValideCleDossierResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSValideCleDossierResult $SWS_ValideCleDossierResult
     * @return SWSValideCleDossierResponse
     */
    public function withSWS_ValideCleDossierResult($SWS_ValideCleDossierResult)
    {
        $new = clone $this;
        $new->SWS_ValideCleDossierResult = $SWS_ValideCleDossierResult;

        return $new;
    }
}

