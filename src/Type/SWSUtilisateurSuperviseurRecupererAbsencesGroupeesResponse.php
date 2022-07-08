<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSuperviseurRecupererAbsencesGroupeesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererAbsencesGroupeesResult
     */
    private $SWS_UtilisateurSuperviseurRecupererAbsencesGroupeesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererAbsencesGroupeesResult
     */
    public function getSWS_UtilisateurSuperviseurRecupererAbsencesGroupeesResult()
    {
        return $this->SWS_UtilisateurSuperviseurRecupererAbsencesGroupeesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererAbsencesGroupeesResult $SWS_UtilisateurSuperviseurRecupererAbsencesGroupeesResult
     * @return SWSUtilisateurSuperviseurRecupererAbsencesGroupeesResponse
     */
    public function withSWS_UtilisateurSuperviseurRecupererAbsencesGroupeesResult($SWS_UtilisateurSuperviseurRecupererAbsencesGroupeesResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSuperviseurRecupererAbsencesGroupeesResult = $SWS_UtilisateurSuperviseurRecupererAbsencesGroupeesResult;

        return $new;
    }
}

