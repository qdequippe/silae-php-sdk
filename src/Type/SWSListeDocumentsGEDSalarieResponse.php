<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSListeDocumentsGEDSalarieResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSListeDocumentsGEDResult
     */
    private $SWS_ListeDocumentsGEDSalarieResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSListeDocumentsGEDResult
     */
    public function getSWS_ListeDocumentsGEDSalarieResult()
    {
        return $this->SWS_ListeDocumentsGEDSalarieResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSListeDocumentsGEDResult $SWS_ListeDocumentsGEDSalarieResult
     * @return SWSListeDocumentsGEDSalarieResponse
     */
    public function withSWS_ListeDocumentsGEDSalarieResult($SWS_ListeDocumentsGEDSalarieResult)
    {
        $new = clone $this;
        $new->SWS_ListeDocumentsGEDSalarieResult = $SWS_ListeDocumentsGEDSalarieResult;

        return $new;
    }
}

