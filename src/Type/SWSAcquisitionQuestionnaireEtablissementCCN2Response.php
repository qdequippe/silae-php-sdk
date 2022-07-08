<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSAcquisitionQuestionnaireEtablissementCCN2Response implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSQuestionnaireCCNResult
     */
    private $SWS_AcquisitionQuestionnaireEtablissementCCN2Result;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSQuestionnaireCCNResult
     */
    public function getSWS_AcquisitionQuestionnaireEtablissementCCN2Result()
    {
        return $this->SWS_AcquisitionQuestionnaireEtablissementCCN2Result;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSQuestionnaireCCNResult $SWS_AcquisitionQuestionnaireEtablissementCCN2Result
     * @return SWSAcquisitionQuestionnaireEtablissementCCN2Response
     */
    public function withSWS_AcquisitionQuestionnaireEtablissementCCN2Result($SWS_AcquisitionQuestionnaireEtablissementCCN2Result)
    {
        $new = clone $this;
        $new->SWS_AcquisitionQuestionnaireEtablissementCCN2Result = $SWS_AcquisitionQuestionnaireEtablissementCCN2Result;

        return $new;
    }
}

