<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSalarieDocumentGEDResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSDocumentGEDResult
     */
    private $SWS_UtilisateurSalarieDocumentGEDResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSDocumentGEDResult
     */
    public function getSWS_UtilisateurSalarieDocumentGEDResult()
    {
        return $this->SWS_UtilisateurSalarieDocumentGEDResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSDocumentGEDResult $SWS_UtilisateurSalarieDocumentGEDResult
     * @return SWSUtilisateurSalarieDocumentGEDResponse
     */
    public function withSWS_UtilisateurSalarieDocumentGEDResult($SWS_UtilisateurSalarieDocumentGEDResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSalarieDocumentGEDResult = $SWS_UtilisateurSalarieDocumentGEDResult;

        return $new;
    }
}

