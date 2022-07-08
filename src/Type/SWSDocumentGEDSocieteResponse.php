<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSDocumentGEDSocieteResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSDocumentGEDResult
     */
    private $SWS_DocumentGEDSocieteResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSDocumentGEDResult
     */
    public function getSWS_DocumentGEDSocieteResult()
    {
        return $this->SWS_DocumentGEDSocieteResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSDocumentGEDResult $SWS_DocumentGEDSocieteResult
     * @return SWSDocumentGEDSocieteResponse
     */
    public function withSWS_DocumentGEDSocieteResult($SWS_DocumentGEDSocieteResult)
    {
        $new = clone $this;
        $new->SWS_DocumentGEDSocieteResult = $SWS_DocumentGEDSocieteResult;

        return $new;
    }
}

