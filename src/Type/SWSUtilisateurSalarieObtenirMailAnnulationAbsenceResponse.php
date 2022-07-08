<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSalarieObtenirMailAnnulationAbsenceResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieObtenirMailAnnulationAbsenceResult
     */
    private $SWS_UtilisateurSalarieObtenirMailAnnulationAbsenceResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieObtenirMailAnnulationAbsenceResult
     */
    public function getSWS_UtilisateurSalarieObtenirMailAnnulationAbsenceResult()
    {
        return $this->SWS_UtilisateurSalarieObtenirMailAnnulationAbsenceResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieObtenirMailAnnulationAbsenceResult $SWS_UtilisateurSalarieObtenirMailAnnulationAbsenceResult
     * @return SWSUtilisateurSalarieObtenirMailAnnulationAbsenceResponse
     */
    public function withSWS_UtilisateurSalarieObtenirMailAnnulationAbsenceResult($SWS_UtilisateurSalarieObtenirMailAnnulationAbsenceResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSalarieObtenirMailAnnulationAbsenceResult = $SWS_UtilisateurSalarieObtenirMailAnnulationAbsenceResult;

        return $new;
    }
}

