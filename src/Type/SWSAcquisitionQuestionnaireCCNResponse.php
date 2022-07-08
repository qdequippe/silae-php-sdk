<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSAcquisitionQuestionnaireCCNResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSQuestionnaireCCNResult
     */
    private $SWS_AcquisitionQuestionnaireCCNResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSQuestionnaireCCNResult
     */
    public function getSWS_AcquisitionQuestionnaireCCNResult()
    {
        return $this->SWS_AcquisitionQuestionnaireCCNResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSQuestionnaireCCNResult $SWS_AcquisitionQuestionnaireCCNResult
     * @return SWSAcquisitionQuestionnaireCCNResponse
     */
    public function withSWS_AcquisitionQuestionnaireCCNResult($SWS_AcquisitionQuestionnaireCCNResult)
    {
        $new = clone $this;
        $new->SWS_AcquisitionQuestionnaireCCNResult = $SWS_AcquisitionQuestionnaireCCNResult;

        return $new;
    }
}

