<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSuperviseurRecupererAbsencesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererAbsencesResult
     */
    private $SWS_UtilisateurSuperviseurRecupererAbsencesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererAbsencesResult
     */
    public function getSWS_UtilisateurSuperviseurRecupererAbsencesResult()
    {
        return $this->SWS_UtilisateurSuperviseurRecupererAbsencesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererAbsencesResult $SWS_UtilisateurSuperviseurRecupererAbsencesResult
     * @return SWSUtilisateurSuperviseurRecupererAbsencesResponse
     */
    public function withSWS_UtilisateurSuperviseurRecupererAbsencesResult($SWS_UtilisateurSuperviseurRecupererAbsencesResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSuperviseurRecupererAbsencesResult = $SWS_UtilisateurSuperviseurRecupererAbsencesResult;

        return $new;
    }
}

