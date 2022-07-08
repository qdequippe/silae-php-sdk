<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactEnregistrerVisiteMedicaleResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactEnregistrerVisiteMedicaleResult
     */
    private $SWS_UtilisateurContactEnregistrerVisiteMedicaleResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactEnregistrerVisiteMedicaleResult
     */
    public function getSWS_UtilisateurContactEnregistrerVisiteMedicaleResult()
    {
        return $this->SWS_UtilisateurContactEnregistrerVisiteMedicaleResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactEnregistrerVisiteMedicaleResult $SWS_UtilisateurContactEnregistrerVisiteMedicaleResult
     * @return SWSUtilisateurContactEnregistrerVisiteMedicaleResponse
     */
    public function withSWS_UtilisateurContactEnregistrerVisiteMedicaleResult($SWS_UtilisateurContactEnregistrerVisiteMedicaleResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactEnregistrerVisiteMedicaleResult = $SWS_UtilisateurContactEnregistrerVisiteMedicaleResult;

        return $new;
    }
}

