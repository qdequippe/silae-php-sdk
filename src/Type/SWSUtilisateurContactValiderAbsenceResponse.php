<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactValiderAbsenceResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactValiderAbsenceResult
     */
    private $SWS_UtilisateurContactValiderAbsenceResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactValiderAbsenceResult
     */
    public function getSWS_UtilisateurContactValiderAbsenceResult()
    {
        return $this->SWS_UtilisateurContactValiderAbsenceResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactValiderAbsenceResult $SWS_UtilisateurContactValiderAbsenceResult
     * @return SWSUtilisateurContactValiderAbsenceResponse
     */
    public function withSWS_UtilisateurContactValiderAbsenceResult($SWS_UtilisateurContactValiderAbsenceResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactValiderAbsenceResult = $SWS_UtilisateurContactValiderAbsenceResult;

        return $new;
    }
}

