<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSModificationFNALResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSModificationFNALResult
     */
    private $SWS_ModificationFNALResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSModificationFNALResult
     */
    public function getSWS_ModificationFNALResult()
    {
        return $this->SWS_ModificationFNALResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSModificationFNALResult $SWS_ModificationFNALResult
     * @return SWSModificationFNALResponse
     */
    public function withSWS_ModificationFNALResult($SWS_ModificationFNALResult)
    {
        $new = clone $this;
        $new->SWS_ModificationFNALResult = $SWS_ModificationFNALResult;

        return $new;
    }
}

