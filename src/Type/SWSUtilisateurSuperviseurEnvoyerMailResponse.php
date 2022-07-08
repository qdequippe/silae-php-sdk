<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSuperviseurEnvoyerMailResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurEnvoyerMailResult
     */
    private $SWS_UtilisateurSuperviseurEnvoyerMailResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurEnvoyerMailResult
     */
    public function getSWS_UtilisateurSuperviseurEnvoyerMailResult()
    {
        return $this->SWS_UtilisateurSuperviseurEnvoyerMailResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurEnvoyerMailResult $SWS_UtilisateurSuperviseurEnvoyerMailResult
     * @return SWSUtilisateurSuperviseurEnvoyerMailResponse
     */
    public function withSWS_UtilisateurSuperviseurEnvoyerMailResult($SWS_UtilisateurSuperviseurEnvoyerMailResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSuperviseurEnvoyerMailResult = $SWS_UtilisateurSuperviseurEnvoyerMailResult;

        return $new;
    }
}

