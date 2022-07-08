<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSuperviseurValiderDemandeAbsenceResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurSuperviserDemandeAbsenceResult
     */
    private $SWS_UtilisateurSuperviseurValiderDemandeAbsenceResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurSuperviserDemandeAbsenceResult
     */
    public function getSWS_UtilisateurSuperviseurValiderDemandeAbsenceResult()
    {
        return $this->SWS_UtilisateurSuperviseurValiderDemandeAbsenceResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurSuperviserDemandeAbsenceResult $SWS_UtilisateurSuperviseurValiderDemandeAbsenceResult
     * @return SWSUtilisateurSuperviseurValiderDemandeAbsenceResponse
     */
    public function withSWS_UtilisateurSuperviseurValiderDemandeAbsenceResult($SWS_UtilisateurSuperviseurValiderDemandeAbsenceResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSuperviseurValiderDemandeAbsenceResult = $SWS_UtilisateurSuperviseurValiderDemandeAbsenceResult;

        return $new;
    }
}

