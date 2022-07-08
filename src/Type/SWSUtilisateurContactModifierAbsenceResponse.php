<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactModifierAbsenceResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactModifierAbsenceResult
     */
    private $SWS_UtilisateurContactModifierAbsenceResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactModifierAbsenceResult
     */
    public function getSWS_UtilisateurContactModifierAbsenceResult()
    {
        return $this->SWS_UtilisateurContactModifierAbsenceResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactModifierAbsenceResult $SWS_UtilisateurContactModifierAbsenceResult
     * @return SWSUtilisateurContactModifierAbsenceResponse
     */
    public function withSWS_UtilisateurContactModifierAbsenceResult($SWS_UtilisateurContactModifierAbsenceResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactModifierAbsenceResult = $SWS_UtilisateurContactModifierAbsenceResult;

        return $new;
    }
}

