<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSModificationEffortConstructionResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSModificationEffortConstructionResult
     */
    private $SWS_ModificationEffortConstructionResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSModificationEffortConstructionResult
     */
    public function getSWS_ModificationEffortConstructionResult()
    {
        return $this->SWS_ModificationEffortConstructionResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSModificationEffortConstructionResult $SWS_ModificationEffortConstructionResult
     * @return SWSModificationEffortConstructionResponse
     */
    public function withSWS_ModificationEffortConstructionResult($SWS_ModificationEffortConstructionResult)
    {
        $new = clone $this;
        $new->SWS_ModificationEffortConstructionResult = $SWS_ModificationEffortConstructionResult;

        return $new;
    }
}

