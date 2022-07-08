<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSListeDocumentsGEDSocieteResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSListeDocumentsGEDResult
     */
    private $SWS_ListeDocumentsGEDSocieteResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSListeDocumentsGEDResult
     */
    public function getSWS_ListeDocumentsGEDSocieteResult()
    {
        return $this->SWS_ListeDocumentsGEDSocieteResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSListeDocumentsGEDResult $SWS_ListeDocumentsGEDSocieteResult
     * @return SWSListeDocumentsGEDSocieteResponse
     */
    public function withSWS_ListeDocumentsGEDSocieteResult($SWS_ListeDocumentsGEDSocieteResult)
    {
        $new = clone $this;
        $new->SWS_ListeDocumentsGEDSocieteResult = $SWS_ListeDocumentsGEDSocieteResult;

        return $new;
    }
}

