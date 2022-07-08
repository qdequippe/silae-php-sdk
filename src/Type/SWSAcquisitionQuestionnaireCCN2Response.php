<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSAcquisitionQuestionnaireCCN2Response implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSQuestionnaireCCNResult
     */
    private $SWS_AcquisitionQuestionnaireCCN2Result;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSQuestionnaireCCNResult
     */
    public function getSWS_AcquisitionQuestionnaireCCN2Result()
    {
        return $this->SWS_AcquisitionQuestionnaireCCN2Result;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSQuestionnaireCCNResult $SWS_AcquisitionQuestionnaireCCN2Result
     * @return SWSAcquisitionQuestionnaireCCN2Response
     */
    public function withSWS_AcquisitionQuestionnaireCCN2Result($SWS_AcquisitionQuestionnaireCCN2Result)
    {
        $new = clone $this;
        $new->SWS_AcquisitionQuestionnaireCCN2Result = $SWS_AcquisitionQuestionnaireCCN2Result;

        return $new;
    }
}

