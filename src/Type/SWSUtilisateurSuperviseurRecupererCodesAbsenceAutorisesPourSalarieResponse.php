<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSuperviseurRecupererCodesAbsenceAutorisesPourSalarieResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererCodesAbsenceAutorisesPourSalarieResult
     */
    private $SWS_UtilisateurSuperviseurRecupererCodesAbsenceAutorisesPourSalarieResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererCodesAbsenceAutorisesPourSalarieResult
     */
    public function getSWS_UtilisateurSuperviseurRecupererCodesAbsenceAutorisesPourSalarieResult()
    {
        return $this->SWS_UtilisateurSuperviseurRecupererCodesAbsenceAutorisesPourSalarieResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererCodesAbsenceAutorisesPourSalarieResult $SWS_UtilisateurSuperviseurRecupererCodesAbsenceAutorisesPourSalarieResult
     * @return SWSUtilisateurSuperviseurRecupererCodesAbsenceAutorisesPourSalarieResponse
     */
    public function withSWS_UtilisateurSuperviseurRecupererCodesAbsenceAutorisesPourSalarieResult($SWS_UtilisateurSuperviseurRecupererCodesAbsenceAutorisesPourSalarieResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSuperviseurRecupererCodesAbsenceAutorisesPourSalarieResult = $SWS_UtilisateurSuperviseurRecupererCodesAbsenceAutorisesPourSalarieResult;

        return $new;
    }
}

