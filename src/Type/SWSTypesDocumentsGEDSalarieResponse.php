<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSTypesDocumentsGEDSalarieResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSTypesDocumentsGEDResult
     */
    private $SWS_TypesDocumentsGEDSalarieResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSTypesDocumentsGEDResult
     */
    public function getSWS_TypesDocumentsGEDSalarieResult()
    {
        return $this->SWS_TypesDocumentsGEDSalarieResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSTypesDocumentsGEDResult $SWS_TypesDocumentsGEDSalarieResult
     * @return SWSTypesDocumentsGEDSalarieResponse
     */
    public function withSWS_TypesDocumentsGEDSalarieResult($SWS_TypesDocumentsGEDSalarieResult)
    {
        $new = clone $this;
        $new->SWS_TypesDocumentsGEDSalarieResult = $SWS_TypesDocumentsGEDSalarieResult;

        return $new;
    }
}

