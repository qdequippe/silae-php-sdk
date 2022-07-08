<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSalarieRecupererInfosCongesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieInfosCongesResult
     */
    private $SWS_UtilisateurSalarieRecupererInfosCongesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieInfosCongesResult
     */
    public function getSWS_UtilisateurSalarieRecupererInfosCongesResult()
    {
        return $this->SWS_UtilisateurSalarieRecupererInfosCongesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieInfosCongesResult $SWS_UtilisateurSalarieRecupererInfosCongesResult
     * @return SWSUtilisateurSalarieRecupererInfosCongesResponse
     */
    public function withSWS_UtilisateurSalarieRecupererInfosCongesResult($SWS_UtilisateurSalarieRecupererInfosCongesResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSalarieRecupererInfosCongesResult = $SWS_UtilisateurSalarieRecupererInfosCongesResult;

        return $new;
    }
}

