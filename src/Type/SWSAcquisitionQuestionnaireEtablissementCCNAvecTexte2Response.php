<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSAcquisitionQuestionnaireEtablissementCCNAvecTexte2Response implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSQuestionnaireCCNResult
     */
    private $SWS_AcquisitionQuestionnaireEtablissementCCNAvecTexte2Result;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSQuestionnaireCCNResult
     */
    public function getSWS_AcquisitionQuestionnaireEtablissementCCNAvecTexte2Result()
    {
        return $this->SWS_AcquisitionQuestionnaireEtablissementCCNAvecTexte2Result;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSQuestionnaireCCNResult $SWS_AcquisitionQuestionnaireEtablissementCCNAvecTexte2Result
     * @return SWSAcquisitionQuestionnaireEtablissementCCNAvecTexte2Response
     */
    public function withSWS_AcquisitionQuestionnaireEtablissementCCNAvecTexte2Result($SWS_AcquisitionQuestionnaireEtablissementCCNAvecTexte2Result)
    {
        $new = clone $this;
        $new->SWS_AcquisitionQuestionnaireEtablissementCCNAvecTexte2Result = $SWS_AcquisitionQuestionnaireEtablissementCCNAvecTexte2Result;

        return $new;
    }
}

