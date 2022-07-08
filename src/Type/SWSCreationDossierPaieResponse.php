<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSCreationDossierPaieResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSCreationDossierPaieResult
     */
    private $SWS_CreationDossierPaieResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSCreationDossierPaieResult
     */
    public function getSWS_CreationDossierPaieResult()
    {
        return $this->SWS_CreationDossierPaieResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSCreationDossierPaieResult $SWS_CreationDossierPaieResult
     * @return SWSCreationDossierPaieResponse
     */
    public function withSWS_CreationDossierPaieResult($SWS_CreationDossierPaieResult)
    {
        $new = clone $this;
        $new->SWS_CreationDossierPaieResult = $SWS_CreationDossierPaieResult;

        return $new;
    }
}

