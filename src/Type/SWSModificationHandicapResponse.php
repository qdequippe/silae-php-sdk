<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSModificationHandicapResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSModificationHandicapResult
     */
    private $SWS_ModificationHandicapResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSModificationHandicapResult
     */
    public function getSWS_ModificationHandicapResult()
    {
        return $this->SWS_ModificationHandicapResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSModificationHandicapResult $SWS_ModificationHandicapResult
     * @return SWSModificationHandicapResponse
     */
    public function withSWS_ModificationHandicapResult($SWS_ModificationHandicapResult)
    {
        $new = clone $this;
        $new->SWS_ModificationHandicapResult = $SWS_ModificationHandicapResult;

        return $new;
    }
}

