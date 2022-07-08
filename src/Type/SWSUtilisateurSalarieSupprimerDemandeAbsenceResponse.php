<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSalarieSupprimerDemandeAbsenceResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieSupprimerDemandeAbsenceResult
     */
    private $SWS_UtilisateurSalarieSupprimerDemandeAbsenceResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieSupprimerDemandeAbsenceResult
     */
    public function getSWS_UtilisateurSalarieSupprimerDemandeAbsenceResult()
    {
        return $this->SWS_UtilisateurSalarieSupprimerDemandeAbsenceResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieSupprimerDemandeAbsenceResult $SWS_UtilisateurSalarieSupprimerDemandeAbsenceResult
     * @return SWSUtilisateurSalarieSupprimerDemandeAbsenceResponse
     */
    public function withSWS_UtilisateurSalarieSupprimerDemandeAbsenceResult($SWS_UtilisateurSalarieSupprimerDemandeAbsenceResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSalarieSupprimerDemandeAbsenceResult = $SWS_UtilisateurSalarieSupprimerDemandeAbsenceResult;

        return $new;
    }
}

