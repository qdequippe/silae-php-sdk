<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSImportXmlParametrageOrganismeDSNResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSImportXmlParametrageOrganismeDSNResult
     */
    private $SWS_ImportXmlParametrageOrganismeDSNResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSImportXmlParametrageOrganismeDSNResult
     */
    public function getSWS_ImportXmlParametrageOrganismeDSNResult()
    {
        return $this->SWS_ImportXmlParametrageOrganismeDSNResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSImportXmlParametrageOrganismeDSNResult $SWS_ImportXmlParametrageOrganismeDSNResult
     * @return SWSImportXmlParametrageOrganismeDSNResponse
     */
    public function withSWS_ImportXmlParametrageOrganismeDSNResult($SWS_ImportXmlParametrageOrganismeDSNResult)
    {
        $new = clone $this;
        $new->SWS_ImportXmlParametrageOrganismeDSNResult = $SWS_ImportXmlParametrageOrganismeDSNResult;

        return $new;
    }
}

