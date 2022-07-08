<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSuperviseurRecupererDemandesConges2Response implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererDemandesConges2Result
     */
    private $SWS_UtilisateurSuperviseurRecupererDemandesConges2Result;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererDemandesConges2Result
     */
    public function getSWS_UtilisateurSuperviseurRecupererDemandesConges2Result()
    {
        return $this->SWS_UtilisateurSuperviseurRecupererDemandesConges2Result;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererDemandesConges2Result $SWS_UtilisateurSuperviseurRecupererDemandesConges2Result
     * @return SWSUtilisateurSuperviseurRecupererDemandesConges2Response
     */
    public function withSWS_UtilisateurSuperviseurRecupererDemandesConges2Result($SWS_UtilisateurSuperviseurRecupererDemandesConges2Result)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSuperviseurRecupererDemandesConges2Result = $SWS_UtilisateurSuperviseurRecupererDemandesConges2Result;

        return $new;
    }
}

