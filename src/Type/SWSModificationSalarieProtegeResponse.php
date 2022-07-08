<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSModificationSalarieProtegeResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSModificationSalarieProtegeResult
     */
    private $SWS_ModificationSalarieProtegeResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSModificationSalarieProtegeResult
     */
    public function getSWS_ModificationSalarieProtegeResult()
    {
        return $this->SWS_ModificationSalarieProtegeResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSModificationSalarieProtegeResult $SWS_ModificationSalarieProtegeResult
     * @return SWSModificationSalarieProtegeResponse
     */
    public function withSWS_ModificationSalarieProtegeResult($SWS_ModificationSalarieProtegeResult)
    {
        $new = clone $this;
        $new->SWS_ModificationSalarieProtegeResult = $SWS_ModificationSalarieProtegeResult;

        return $new;
    }
}

