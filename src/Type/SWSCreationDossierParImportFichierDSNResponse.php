<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSCreationDossierParImportFichierDSNResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSImportFichierDSNResult
     */
    private $SWS_CreationDossierParImportFichierDSNResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSImportFichierDSNResult
     */
    public function getSWS_CreationDossierParImportFichierDSNResult()
    {
        return $this->SWS_CreationDossierParImportFichierDSNResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSImportFichierDSNResult $SWS_CreationDossierParImportFichierDSNResult
     * @return SWSCreationDossierParImportFichierDSNResponse
     */
    public function withSWS_CreationDossierParImportFichierDSNResult($SWS_CreationDossierParImportFichierDSNResult)
    {
        $new = clone $this;
        $new->SWS_CreationDossierParImportFichierDSNResult = $SWS_CreationDossierParImportFichierDSNResult;

        return $new;
    }
}

