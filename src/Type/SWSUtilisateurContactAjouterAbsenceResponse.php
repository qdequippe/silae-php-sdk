<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactAjouterAbsenceResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAjouterAbsenceResult
     */
    private $SWS_UtilisateurContactAjouterAbsenceResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAjouterAbsenceResult
     */
    public function getSWS_UtilisateurContactAjouterAbsenceResult()
    {
        return $this->SWS_UtilisateurContactAjouterAbsenceResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAjouterAbsenceResult $SWS_UtilisateurContactAjouterAbsenceResult
     * @return SWSUtilisateurContactAjouterAbsenceResponse
     */
    public function withSWS_UtilisateurContactAjouterAbsenceResult($SWS_UtilisateurContactAjouterAbsenceResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactAjouterAbsenceResult = $SWS_UtilisateurContactAjouterAbsenceResult;

        return $new;
    }
}

