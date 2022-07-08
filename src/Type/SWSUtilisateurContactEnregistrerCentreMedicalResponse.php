<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactEnregistrerCentreMedicalResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactEnregistrerCentreMedicalResult
     */
    private $SWS_UtilisateurContactEnregistrerCentreMedicalResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactEnregistrerCentreMedicalResult
     */
    public function getSWS_UtilisateurContactEnregistrerCentreMedicalResult()
    {
        return $this->SWS_UtilisateurContactEnregistrerCentreMedicalResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactEnregistrerCentreMedicalResult $SWS_UtilisateurContactEnregistrerCentreMedicalResult
     * @return SWSUtilisateurContactEnregistrerCentreMedicalResponse
     */
    public function withSWS_UtilisateurContactEnregistrerCentreMedicalResult($SWS_UtilisateurContactEnregistrerCentreMedicalResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactEnregistrerCentreMedicalResult = $SWS_UtilisateurContactEnregistrerCentreMedicalResult;

        return $new;
    }
}

