<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactSupprimerCentreMedicalResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactSupprimerCentreMedicalResult
     */
    private $SWS_UtilisateurContactSupprimerCentreMedicalResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactSupprimerCentreMedicalResult
     */
    public function getSWS_UtilisateurContactSupprimerCentreMedicalResult()
    {
        return $this->SWS_UtilisateurContactSupprimerCentreMedicalResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactSupprimerCentreMedicalResult $SWS_UtilisateurContactSupprimerCentreMedicalResult
     * @return SWSUtilisateurContactSupprimerCentreMedicalResponse
     */
    public function withSWS_UtilisateurContactSupprimerCentreMedicalResult($SWS_UtilisateurContactSupprimerCentreMedicalResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactSupprimerCentreMedicalResult = $SWS_UtilisateurContactSupprimerCentreMedicalResult;

        return $new;
    }
}

