<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSuperviseurRecupererDetailCongesSalarieResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererDemandesCongesResult
     */
    private $SWS_UtilisateurSuperviseurRecupererDetailCongesSalarieResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererDemandesCongesResult
     */
    public function getSWS_UtilisateurSuperviseurRecupererDetailCongesSalarieResult()
    {
        return $this->SWS_UtilisateurSuperviseurRecupererDetailCongesSalarieResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererDemandesCongesResult $SWS_UtilisateurSuperviseurRecupererDetailCongesSalarieResult
     * @return SWSUtilisateurSuperviseurRecupererDetailCongesSalarieResponse
     */
    public function withSWS_UtilisateurSuperviseurRecupererDetailCongesSalarieResult($SWS_UtilisateurSuperviseurRecupererDetailCongesSalarieResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSuperviseurRecupererDetailCongesSalarieResult = $SWS_UtilisateurSuperviseurRecupererDetailCongesSalarieResult;

        return $new;
    }
}

