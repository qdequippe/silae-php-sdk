<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSModificationChampSalarie2Response implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSModificationChampSalarieResult
     */
    private $SWS_ModificationChampSalarie2Result;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSModificationChampSalarieResult
     */
    public function getSWS_ModificationChampSalarie2Result()
    {
        return $this->SWS_ModificationChampSalarie2Result;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSModificationChampSalarieResult $SWS_ModificationChampSalarie2Result
     * @return SWSModificationChampSalarie2Response
     */
    public function withSWS_ModificationChampSalarie2Result($SWS_ModificationChampSalarie2Result)
    {
        $new = clone $this;
        $new->SWS_ModificationChampSalarie2Result = $SWS_ModificationChampSalarie2Result;

        return $new;
    }
}

