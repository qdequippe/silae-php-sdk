<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSAcquisitionQuestionnaireContratComplementaireResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSQuestionnaireContratComplementaireResult
     */
    private $SWS_AcquisitionQuestionnaireContratComplementaireResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSQuestionnaireContratComplementaireResult
     */
    public function getSWS_AcquisitionQuestionnaireContratComplementaireResult()
    {
        return $this->SWS_AcquisitionQuestionnaireContratComplementaireResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSQuestionnaireContratComplementaireResult $SWS_AcquisitionQuestionnaireContratComplementaireResult
     * @return SWSAcquisitionQuestionnaireContratComplementaireResponse
     */
    public function withSWS_AcquisitionQuestionnaireContratComplementaireResult($SWS_AcquisitionQuestionnaireContratComplementaireResult)
    {
        $new = clone $this;
        $new->SWS_AcquisitionQuestionnaireContratComplementaireResult = $SWS_AcquisitionQuestionnaireContratComplementaireResult;

        return $new;
    }
}

