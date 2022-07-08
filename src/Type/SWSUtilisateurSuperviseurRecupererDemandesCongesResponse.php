<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSuperviseurRecupererDemandesCongesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererDemandesCongesResult
     */
    private $SWS_UtilisateurSuperviseurRecupererDemandesCongesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererDemandesCongesResult
     */
    public function getSWS_UtilisateurSuperviseurRecupererDemandesCongesResult()
    {
        return $this->SWS_UtilisateurSuperviseurRecupererDemandesCongesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererDemandesCongesResult $SWS_UtilisateurSuperviseurRecupererDemandesCongesResult
     * @return SWSUtilisateurSuperviseurRecupererDemandesCongesResponse
     */
    public function withSWS_UtilisateurSuperviseurRecupererDemandesCongesResult($SWS_UtilisateurSuperviseurRecupererDemandesCongesResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSuperviseurRecupererDemandesCongesResult = $SWS_UtilisateurSuperviseurRecupererDemandesCongesResult;

        return $new;
    }
}

