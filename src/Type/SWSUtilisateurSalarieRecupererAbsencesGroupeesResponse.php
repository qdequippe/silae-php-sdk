<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSalarieRecupererAbsencesGroupeesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieRecupererAbsencesGroupeesResult
     */
    private $SWS_UtilisateurSalarieRecupererAbsencesGroupeesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieRecupererAbsencesGroupeesResult
     */
    public function getSWS_UtilisateurSalarieRecupererAbsencesGroupeesResult()
    {
        return $this->SWS_UtilisateurSalarieRecupererAbsencesGroupeesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieRecupererAbsencesGroupeesResult $SWS_UtilisateurSalarieRecupererAbsencesGroupeesResult
     * @return SWSUtilisateurSalarieRecupererAbsencesGroupeesResponse
     */
    public function withSWS_UtilisateurSalarieRecupererAbsencesGroupeesResult($SWS_UtilisateurSalarieRecupererAbsencesGroupeesResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSalarieRecupererAbsencesGroupeesResult = $SWS_UtilisateurSalarieRecupererAbsencesGroupeesResult;

        return $new;
    }
}

