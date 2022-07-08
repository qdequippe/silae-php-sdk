<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSAcquisitionQuestionnaireCCNAvecTexte2Response implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSQuestionnaireCCNResult
     */
    private $SWS_AcquisitionQuestionnaireCCNAvecTexte2Result;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSQuestionnaireCCNResult
     */
    public function getSWS_AcquisitionQuestionnaireCCNAvecTexte2Result()
    {
        return $this->SWS_AcquisitionQuestionnaireCCNAvecTexte2Result;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSQuestionnaireCCNResult $SWS_AcquisitionQuestionnaireCCNAvecTexte2Result
     * @return SWSAcquisitionQuestionnaireCCNAvecTexte2Response
     */
    public function withSWS_AcquisitionQuestionnaireCCNAvecTexte2Result($SWS_AcquisitionQuestionnaireCCNAvecTexte2Result)
    {
        $new = clone $this;
        $new->SWS_AcquisitionQuestionnaireCCNAvecTexte2Result = $SWS_AcquisitionQuestionnaireCCNAvecTexte2Result;

        return $new;
    }
}

