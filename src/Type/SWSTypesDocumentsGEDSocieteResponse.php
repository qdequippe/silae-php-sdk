<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSTypesDocumentsGEDSocieteResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSTypesDocumentsGEDResult
     */
    private $SWS_TypesDocumentsGEDSocieteResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSTypesDocumentsGEDResult
     */
    public function getSWS_TypesDocumentsGEDSocieteResult()
    {
        return $this->SWS_TypesDocumentsGEDSocieteResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSTypesDocumentsGEDResult $SWS_TypesDocumentsGEDSocieteResult
     * @return SWSTypesDocumentsGEDSocieteResponse
     */
    public function withSWS_TypesDocumentsGEDSocieteResult($SWS_TypesDocumentsGEDSocieteResult)
    {
        $new = clone $this;
        $new->SWS_TypesDocumentsGEDSocieteResult = $SWS_TypesDocumentsGEDSocieteResult;

        return $new;
    }
}

