<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSModificationQuestionnaireContratComplementaireResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSModificationQuestionnaireContratComplementaireResult
     */
    private $SWS_ModificationQuestionnaireContratComplementaireResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSModificationQuestionnaireContratComplementaireResult
     */
    public function getSWS_ModificationQuestionnaireContratComplementaireResult()
    {
        return $this->SWS_ModificationQuestionnaireContratComplementaireResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSModificationQuestionnaireContratComplementaireResult $SWS_ModificationQuestionnaireContratComplementaireResult
     * @return SWSModificationQuestionnaireContratComplementaireResponse
     */
    public function withSWS_ModificationQuestionnaireContratComplementaireResult($SWS_ModificationQuestionnaireContratComplementaireResult)
    {
        $new = clone $this;
        $new->SWS_ModificationQuestionnaireContratComplementaireResult = $SWS_ModificationQuestionnaireContratComplementaireResult;

        return $new;
    }
}

