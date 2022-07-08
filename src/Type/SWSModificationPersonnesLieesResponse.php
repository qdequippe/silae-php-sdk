<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSModificationPersonnesLieesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSModificationPersonnesLieesResult
     */
    private $SWS_ModificationPersonnesLieesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSModificationPersonnesLieesResult
     */
    public function getSWS_ModificationPersonnesLieesResult()
    {
        return $this->SWS_ModificationPersonnesLieesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSModificationPersonnesLieesResult $SWS_ModificationPersonnesLieesResult
     * @return SWSModificationPersonnesLieesResponse
     */
    public function withSWS_ModificationPersonnesLieesResult($SWS_ModificationPersonnesLieesResult)
    {
        $new = clone $this;
        $new->SWS_ModificationPersonnesLieesResult = $SWS_ModificationPersonnesLieesResult;

        return $new;
    }
}

