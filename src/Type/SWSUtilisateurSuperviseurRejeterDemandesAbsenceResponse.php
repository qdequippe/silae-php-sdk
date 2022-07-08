<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSuperviseurRejeterDemandesAbsenceResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurSuperviserDemandesAbsenceResult
     */
    private $SWS_UtilisateurSuperviseurRejeterDemandesAbsenceResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurSuperviserDemandesAbsenceResult
     */
    public function getSWS_UtilisateurSuperviseurRejeterDemandesAbsenceResult()
    {
        return $this->SWS_UtilisateurSuperviseurRejeterDemandesAbsenceResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurSuperviserDemandesAbsenceResult $SWS_UtilisateurSuperviseurRejeterDemandesAbsenceResult
     * @return SWSUtilisateurSuperviseurRejeterDemandesAbsenceResponse
     */
    public function withSWS_UtilisateurSuperviseurRejeterDemandesAbsenceResult($SWS_UtilisateurSuperviseurRejeterDemandesAbsenceResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSuperviseurRejeterDemandesAbsenceResult = $SWS_UtilisateurSuperviseurRejeterDemandesAbsenceResult;

        return $new;
    }
}

