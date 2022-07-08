<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSuperviseurRejeterDemandeAbsenceResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurSuperviserDemandeAbsenceResult
     */
    private $SWS_UtilisateurSuperviseurRejeterDemandeAbsenceResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurSuperviserDemandeAbsenceResult
     */
    public function getSWS_UtilisateurSuperviseurRejeterDemandeAbsenceResult()
    {
        return $this->SWS_UtilisateurSuperviseurRejeterDemandeAbsenceResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurSuperviserDemandeAbsenceResult $SWS_UtilisateurSuperviseurRejeterDemandeAbsenceResult
     * @return SWSUtilisateurSuperviseurRejeterDemandeAbsenceResponse
     */
    public function withSWS_UtilisateurSuperviseurRejeterDemandeAbsenceResult($SWS_UtilisateurSuperviseurRejeterDemandeAbsenceResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSuperviseurRejeterDemandeAbsenceResult = $SWS_UtilisateurSuperviseurRejeterDemandeAbsenceResult;

        return $new;
    }
}

