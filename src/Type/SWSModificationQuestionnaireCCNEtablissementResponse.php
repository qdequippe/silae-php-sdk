<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSModificationQuestionnaireCCNEtablissementResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSModificationQuestionnaireCCNEtablissementResult
     */
    private $SWS_ModificationQuestionnaireCCNEtablissementResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSModificationQuestionnaireCCNEtablissementResult
     */
    public function getSWS_ModificationQuestionnaireCCNEtablissementResult()
    {
        return $this->SWS_ModificationQuestionnaireCCNEtablissementResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSModificationQuestionnaireCCNEtablissementResult $SWS_ModificationQuestionnaireCCNEtablissementResult
     * @return SWSModificationQuestionnaireCCNEtablissementResponse
     */
    public function withSWS_ModificationQuestionnaireCCNEtablissementResult($SWS_ModificationQuestionnaireCCNEtablissementResult)
    {
        $new = clone $this;
        $new->SWS_ModificationQuestionnaireCCNEtablissementResult = $SWS_ModificationQuestionnaireCCNEtablissementResult;

        return $new;
    }
}

