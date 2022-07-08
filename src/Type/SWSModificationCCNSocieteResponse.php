<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSModificationCCNSocieteResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSModificationCCNSocieteResult
     */
    private $SWS_ModificationCCNSocieteResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSModificationCCNSocieteResult
     */
    public function getSWS_ModificationCCNSocieteResult()
    {
        return $this->SWS_ModificationCCNSocieteResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSModificationCCNSocieteResult $SWS_ModificationCCNSocieteResult
     * @return SWSModificationCCNSocieteResponse
     */
    public function withSWS_ModificationCCNSocieteResult($SWS_ModificationCCNSocieteResult)
    {
        $new = clone $this;
        $new->SWS_ModificationCCNSocieteResult = $SWS_ModificationCCNSocieteResult;

        return $new;
    }
}

