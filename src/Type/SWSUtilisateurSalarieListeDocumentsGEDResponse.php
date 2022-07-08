<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSalarieListeDocumentsGEDResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSListeDocumentsGEDUtilisateurSalarieResult
     */
    private $SWS_UtilisateurSalarieListeDocumentsGEDResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSListeDocumentsGEDUtilisateurSalarieResult
     */
    public function getSWS_UtilisateurSalarieListeDocumentsGEDResult()
    {
        return $this->SWS_UtilisateurSalarieListeDocumentsGEDResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSListeDocumentsGEDUtilisateurSalarieResult $SWS_UtilisateurSalarieListeDocumentsGEDResult
     * @return SWSUtilisateurSalarieListeDocumentsGEDResponse
     */
    public function withSWS_UtilisateurSalarieListeDocumentsGEDResult($SWS_UtilisateurSalarieListeDocumentsGEDResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSalarieListeDocumentsGEDResult = $SWS_UtilisateurSalarieListeDocumentsGEDResult;

        return $new;
    }
}

