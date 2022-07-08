<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSalarieRecupererCodesAbsenceAutorisesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieRecupererCodesAbsenceAutorisesResult
     */
    private $SWS_UtilisateurSalarieRecupererCodesAbsenceAutorisesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieRecupererCodesAbsenceAutorisesResult
     */
    public function getSWS_UtilisateurSalarieRecupererCodesAbsenceAutorisesResult()
    {
        return $this->SWS_UtilisateurSalarieRecupererCodesAbsenceAutorisesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieRecupererCodesAbsenceAutorisesResult $SWS_UtilisateurSalarieRecupererCodesAbsenceAutorisesResult
     * @return SWSUtilisateurSalarieRecupererCodesAbsenceAutorisesResponse
     */
    public function withSWS_UtilisateurSalarieRecupererCodesAbsenceAutorisesResult($SWS_UtilisateurSalarieRecupererCodesAbsenceAutorisesResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSalarieRecupererCodesAbsenceAutorisesResult = $SWS_UtilisateurSalarieRecupererCodesAbsenceAutorisesResult;

        return $new;
    }
}

