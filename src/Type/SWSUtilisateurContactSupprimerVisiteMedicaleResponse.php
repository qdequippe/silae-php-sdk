<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactSupprimerVisiteMedicaleResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactSupprimerVisiteMedicaleResult
     */
    private $SWS_UtilisateurContactSupprimerVisiteMedicaleResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactSupprimerVisiteMedicaleResult
     */
    public function getSWS_UtilisateurContactSupprimerVisiteMedicaleResult()
    {
        return $this->SWS_UtilisateurContactSupprimerVisiteMedicaleResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactSupprimerVisiteMedicaleResult $SWS_UtilisateurContactSupprimerVisiteMedicaleResult
     * @return SWSUtilisateurContactSupprimerVisiteMedicaleResponse
     */
    public function withSWS_UtilisateurContactSupprimerVisiteMedicaleResult($SWS_UtilisateurContactSupprimerVisiteMedicaleResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactSupprimerVisiteMedicaleResult = $SWS_UtilisateurContactSupprimerVisiteMedicaleResult;

        return $new;
    }
}

