<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSModificationChampSalarieResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSModificationChampSalarieResult
     */
    private $SWS_ModificationChampSalarieResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSModificationChampSalarieResult
     */
    public function getSWS_ModificationChampSalarieResult()
    {
        return $this->SWS_ModificationChampSalarieResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSModificationChampSalarieResult $SWS_ModificationChampSalarieResult
     * @return SWSModificationChampSalarieResponse
     */
    public function withSWS_ModificationChampSalarieResult($SWS_ModificationChampSalarieResult)
    {
        $new = clone $this;
        $new->SWS_ModificationChampSalarieResult = $SWS_ModificationChampSalarieResult;

        return $new;
    }
}

