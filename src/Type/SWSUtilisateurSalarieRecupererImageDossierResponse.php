<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSalarieRecupererImageDossierResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieRecupererImageDossierResult
     */
    private $SWS_UtilisateurSalarieRecupererImageDossierResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieRecupererImageDossierResult
     */
    public function getSWS_UtilisateurSalarieRecupererImageDossierResult()
    {
        return $this->SWS_UtilisateurSalarieRecupererImageDossierResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieRecupererImageDossierResult $SWS_UtilisateurSalarieRecupererImageDossierResult
     * @return SWSUtilisateurSalarieRecupererImageDossierResponse
     */
    public function withSWS_UtilisateurSalarieRecupererImageDossierResult($SWS_UtilisateurSalarieRecupererImageDossierResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSalarieRecupererImageDossierResult = $SWS_UtilisateurSalarieRecupererImageDossierResult;

        return $new;
    }
}

