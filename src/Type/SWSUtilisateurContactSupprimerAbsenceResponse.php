<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactSupprimerAbsenceResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactSupprimerAbsenceResult
     */
    private $SWS_UtilisateurContactSupprimerAbsenceResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactSupprimerAbsenceResult
     */
    public function getSWS_UtilisateurContactSupprimerAbsenceResult()
    {
        return $this->SWS_UtilisateurContactSupprimerAbsenceResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactSupprimerAbsenceResult $SWS_UtilisateurContactSupprimerAbsenceResult
     * @return SWSUtilisateurContactSupprimerAbsenceResponse
     */
    public function withSWS_UtilisateurContactSupprimerAbsenceResult($SWS_UtilisateurContactSupprimerAbsenceResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactSupprimerAbsenceResult = $SWS_UtilisateurContactSupprimerAbsenceResult;

        return $new;
    }
}

