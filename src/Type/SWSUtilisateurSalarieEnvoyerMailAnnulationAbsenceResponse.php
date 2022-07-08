<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSalarieEnvoyerMailAnnulationAbsenceResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieEnvoyerMailAnnulationAbsenceResult
     */
    private $SWS_UtilisateurSalarieEnvoyerMailAnnulationAbsenceResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieEnvoyerMailAnnulationAbsenceResult
     */
    public function getSWS_UtilisateurSalarieEnvoyerMailAnnulationAbsenceResult()
    {
        return $this->SWS_UtilisateurSalarieEnvoyerMailAnnulationAbsenceResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieEnvoyerMailAnnulationAbsenceResult $SWS_UtilisateurSalarieEnvoyerMailAnnulationAbsenceResult
     * @return SWSUtilisateurSalarieEnvoyerMailAnnulationAbsenceResponse
     */
    public function withSWS_UtilisateurSalarieEnvoyerMailAnnulationAbsenceResult($SWS_UtilisateurSalarieEnvoyerMailAnnulationAbsenceResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSalarieEnvoyerMailAnnulationAbsenceResult = $SWS_UtilisateurSalarieEnvoyerMailAnnulationAbsenceResult;

        return $new;
    }
}

