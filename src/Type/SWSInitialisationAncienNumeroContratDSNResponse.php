<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSInitialisationAncienNumeroContratDSNResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSInitialisationAncienNumeroContratDSNResult
     */
    private $SWS_InitialisationAncienNumeroContratDSNResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSInitialisationAncienNumeroContratDSNResult
     */
    public function getSWS_InitialisationAncienNumeroContratDSNResult()
    {
        return $this->SWS_InitialisationAncienNumeroContratDSNResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSInitialisationAncienNumeroContratDSNResult $SWS_InitialisationAncienNumeroContratDSNResult
     * @return SWSInitialisationAncienNumeroContratDSNResponse
     */
    public function withSWS_InitialisationAncienNumeroContratDSNResult($SWS_InitialisationAncienNumeroContratDSNResult)
    {
        $new = clone $this;
        $new->SWS_InitialisationAncienNumeroContratDSNResult = $SWS_InitialisationAncienNumeroContratDSNResult;

        return $new;
    }
}

