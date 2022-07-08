<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSuperviseurInformationsPortailResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurInformationsPortailResult
     */
    private $SWS_UtilisateurSuperviseurInformationsPortailResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurInformationsPortailResult
     */
    public function getSWS_UtilisateurSuperviseurInformationsPortailResult()
    {
        return $this->SWS_UtilisateurSuperviseurInformationsPortailResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurInformationsPortailResult $SWS_UtilisateurSuperviseurInformationsPortailResult
     * @return SWSUtilisateurSuperviseurInformationsPortailResponse
     */
    public function withSWS_UtilisateurSuperviseurInformationsPortailResult($SWS_UtilisateurSuperviseurInformationsPortailResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSuperviseurInformationsPortailResult = $SWS_UtilisateurSuperviseurInformationsPortailResult;

        return $new;
    }
}

