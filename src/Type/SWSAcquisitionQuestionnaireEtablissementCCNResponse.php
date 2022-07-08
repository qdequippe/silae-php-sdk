<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSAcquisitionQuestionnaireEtablissementCCNResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSQuestionnaireCCNResult
     */
    private $SWS_AcquisitionQuestionnaireEtablissementCCNResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSQuestionnaireCCNResult
     */
    public function getSWS_AcquisitionQuestionnaireEtablissementCCNResult()
    {
        return $this->SWS_AcquisitionQuestionnaireEtablissementCCNResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSQuestionnaireCCNResult $SWS_AcquisitionQuestionnaireEtablissementCCNResult
     * @return SWSAcquisitionQuestionnaireEtablissementCCNResponse
     */
    public function withSWS_AcquisitionQuestionnaireEtablissementCCNResult($SWS_AcquisitionQuestionnaireEtablissementCCNResult)
    {
        $new = clone $this;
        $new->SWS_AcquisitionQuestionnaireEtablissementCCNResult = $SWS_AcquisitionQuestionnaireEtablissementCCNResult;

        return $new;
    }
}

