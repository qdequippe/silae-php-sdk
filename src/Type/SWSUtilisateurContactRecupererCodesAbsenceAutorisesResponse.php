<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactRecupererCodesAbsenceAutorisesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactRecupererCodesAbsenceAutorisesResult
     */
    private $SWS_UtilisateurContactRecupererCodesAbsenceAutorisesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactRecupererCodesAbsenceAutorisesResult
     */
    public function getSWS_UtilisateurContactRecupererCodesAbsenceAutorisesResult()
    {
        return $this->SWS_UtilisateurContactRecupererCodesAbsenceAutorisesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactRecupererCodesAbsenceAutorisesResult $SWS_UtilisateurContactRecupererCodesAbsenceAutorisesResult
     * @return SWSUtilisateurContactRecupererCodesAbsenceAutorisesResponse
     */
    public function withSWS_UtilisateurContactRecupererCodesAbsenceAutorisesResult($SWS_UtilisateurContactRecupererCodesAbsenceAutorisesResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactRecupererCodesAbsenceAutorisesResult = $SWS_UtilisateurContactRecupererCodesAbsenceAutorisesResult;

        return $new;
    }
}

