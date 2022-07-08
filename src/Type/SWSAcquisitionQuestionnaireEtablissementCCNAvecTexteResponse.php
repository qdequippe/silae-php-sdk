<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSAcquisitionQuestionnaireEtablissementCCNAvecTexteResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSQuestionnaireCCNResult
     */
    private $SWS_AcquisitionQuestionnaireEtablissementCCNAvecTexteResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSQuestionnaireCCNResult
     */
    public function getSWS_AcquisitionQuestionnaireEtablissementCCNAvecTexteResult()
    {
        return $this->SWS_AcquisitionQuestionnaireEtablissementCCNAvecTexteResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSQuestionnaireCCNResult $SWS_AcquisitionQuestionnaireEtablissementCCNAvecTexteResult
     * @return SWSAcquisitionQuestionnaireEtablissementCCNAvecTexteResponse
     */
    public function withSWS_AcquisitionQuestionnaireEtablissementCCNAvecTexteResult($SWS_AcquisitionQuestionnaireEtablissementCCNAvecTexteResult)
    {
        $new = clone $this;
        $new->SWS_AcquisitionQuestionnaireEtablissementCCNAvecTexteResult = $SWS_AcquisitionQuestionnaireEtablissementCCNAvecTexteResult;

        return $new;
    }
}

