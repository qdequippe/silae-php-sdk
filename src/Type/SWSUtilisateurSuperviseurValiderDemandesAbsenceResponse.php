<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSuperviseurValiderDemandesAbsenceResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurSuperviserDemandesAbsenceResult
     */
    private $SWS_UtilisateurSuperviseurValiderDemandesAbsenceResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurSuperviserDemandesAbsenceResult
     */
    public function getSWS_UtilisateurSuperviseurValiderDemandesAbsenceResult()
    {
        return $this->SWS_UtilisateurSuperviseurValiderDemandesAbsenceResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurSuperviserDemandesAbsenceResult $SWS_UtilisateurSuperviseurValiderDemandesAbsenceResult
     * @return SWSUtilisateurSuperviseurValiderDemandesAbsenceResponse
     */
    public function withSWS_UtilisateurSuperviseurValiderDemandesAbsenceResult($SWS_UtilisateurSuperviseurValiderDemandesAbsenceResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSuperviseurValiderDemandesAbsenceResult = $SWS_UtilisateurSuperviseurValiderDemandesAbsenceResult;

        return $new;
    }
}

