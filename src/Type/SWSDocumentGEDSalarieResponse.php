<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSDocumentGEDSalarieResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSDocumentGEDResult
     */
    private $SWS_DocumentGEDSalarieResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSDocumentGEDResult
     */
    public function getSWS_DocumentGEDSalarieResult()
    {
        return $this->SWS_DocumentGEDSalarieResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSDocumentGEDResult $SWS_DocumentGEDSalarieResult
     * @return SWSDocumentGEDSalarieResponse
     */
    public function withSWS_DocumentGEDSalarieResult($SWS_DocumentGEDSalarieResult)
    {
        $new = clone $this;
        $new->SWS_DocumentGEDSalarieResult = $SWS_DocumentGEDSalarieResult;

        return $new;
    }
}

