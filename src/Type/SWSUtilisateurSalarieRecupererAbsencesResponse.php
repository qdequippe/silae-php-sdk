<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSalarieRecupererAbsencesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieRecupererAbsencesResult
     */
    private $SWS_UtilisateurSalarieRecupererAbsencesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieRecupererAbsencesResult
     */
    public function getSWS_UtilisateurSalarieRecupererAbsencesResult()
    {
        return $this->SWS_UtilisateurSalarieRecupererAbsencesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieRecupererAbsencesResult $SWS_UtilisateurSalarieRecupererAbsencesResult
     * @return SWSUtilisateurSalarieRecupererAbsencesResponse
     */
    public function withSWS_UtilisateurSalarieRecupererAbsencesResult($SWS_UtilisateurSalarieRecupererAbsencesResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSalarieRecupererAbsencesResult = $SWS_UtilisateurSalarieRecupererAbsencesResult;

        return $new;
    }
}

