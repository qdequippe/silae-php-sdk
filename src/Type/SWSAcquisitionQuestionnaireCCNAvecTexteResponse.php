<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSAcquisitionQuestionnaireCCNAvecTexteResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSQuestionnaireCCNResult
     */
    private $SWS_AcquisitionQuestionnaireCCNAvecTexteResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSQuestionnaireCCNResult
     */
    public function getSWS_AcquisitionQuestionnaireCCNAvecTexteResult()
    {
        return $this->SWS_AcquisitionQuestionnaireCCNAvecTexteResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSQuestionnaireCCNResult $SWS_AcquisitionQuestionnaireCCNAvecTexteResult
     * @return SWSAcquisitionQuestionnaireCCNAvecTexteResponse
     */
    public function withSWS_AcquisitionQuestionnaireCCNAvecTexteResult($SWS_AcquisitionQuestionnaireCCNAvecTexteResult)
    {
        $new = clone $this;
        $new->SWS_AcquisitionQuestionnaireCCNAvecTexteResult = $SWS_AcquisitionQuestionnaireCCNAvecTexteResult;

        return $new;
    }
}

