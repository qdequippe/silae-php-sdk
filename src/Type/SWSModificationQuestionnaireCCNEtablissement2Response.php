<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSModificationQuestionnaireCCNEtablissement2Response implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSModificationQuestionnaireCCNEtablissementResult
     */
    private $SWS_ModificationQuestionnaireCCNEtablissement2Result;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSModificationQuestionnaireCCNEtablissementResult
     */
    public function getSWS_ModificationQuestionnaireCCNEtablissement2Result()
    {
        return $this->SWS_ModificationQuestionnaireCCNEtablissement2Result;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSModificationQuestionnaireCCNEtablissementResult $SWS_ModificationQuestionnaireCCNEtablissement2Result
     * @return SWSModificationQuestionnaireCCNEtablissement2Response
     */
    public function withSWS_ModificationQuestionnaireCCNEtablissement2Result($SWS_ModificationQuestionnaireCCNEtablissement2Result)
    {
        $new = clone $this;
        $new->SWS_ModificationQuestionnaireCCNEtablissement2Result = $SWS_ModificationQuestionnaireCCNEtablissement2Result;

        return $new;
    }
}

