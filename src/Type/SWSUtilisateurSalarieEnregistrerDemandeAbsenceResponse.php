<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSalarieEnregistrerDemandeAbsenceResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieEnregistrerDemandeAbsenceResult
     */
    private $SWS_UtilisateurSalarieEnregistrerDemandeAbsenceResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieEnregistrerDemandeAbsenceResult
     */
    public function getSWS_UtilisateurSalarieEnregistrerDemandeAbsenceResult()
    {
        return $this->SWS_UtilisateurSalarieEnregistrerDemandeAbsenceResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieEnregistrerDemandeAbsenceResult $SWS_UtilisateurSalarieEnregistrerDemandeAbsenceResult
     * @return SWSUtilisateurSalarieEnregistrerDemandeAbsenceResponse
     */
    public function withSWS_UtilisateurSalarieEnregistrerDemandeAbsenceResult($SWS_UtilisateurSalarieEnregistrerDemandeAbsenceResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSalarieEnregistrerDemandeAbsenceResult = $SWS_UtilisateurSalarieEnregistrerDemandeAbsenceResult;

        return $new;
    }
}

