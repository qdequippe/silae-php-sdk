<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSuperviseurAjouterAbsencesMultiplesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurAjouterAbsencesMultiplesResult
     */
    private $SWS_UtilisateurSuperviseurAjouterAbsencesMultiplesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurAjouterAbsencesMultiplesResult
     */
    public function getSWS_UtilisateurSuperviseurAjouterAbsencesMultiplesResult()
    {
        return $this->SWS_UtilisateurSuperviseurAjouterAbsencesMultiplesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurAjouterAbsencesMultiplesResult $SWS_UtilisateurSuperviseurAjouterAbsencesMultiplesResult
     * @return SWSUtilisateurSuperviseurAjouterAbsencesMultiplesResponse
     */
    public function withSWS_UtilisateurSuperviseurAjouterAbsencesMultiplesResult($SWS_UtilisateurSuperviseurAjouterAbsencesMultiplesResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSuperviseurAjouterAbsencesMultiplesResult = $SWS_UtilisateurSuperviseurAjouterAbsencesMultiplesResult;

        return $new;
    }
}

