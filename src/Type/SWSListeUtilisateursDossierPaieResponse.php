<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSListeUtilisateursDossierPaieResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSListeUtilisateursDossierPaieResult
     */
    private $SWS_ListeUtilisateursDossierPaieResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSListeUtilisateursDossierPaieResult
     */
    public function getSWS_ListeUtilisateursDossierPaieResult()
    {
        return $this->SWS_ListeUtilisateursDossierPaieResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSListeUtilisateursDossierPaieResult $SWS_ListeUtilisateursDossierPaieResult
     * @return SWSListeUtilisateursDossierPaieResponse
     */
    public function withSWS_ListeUtilisateursDossierPaieResult($SWS_ListeUtilisateursDossierPaieResult)
    {
        $new = clone $this;
        $new->SWS_ListeUtilisateursDossierPaieResult = $SWS_ListeUtilisateursDossierPaieResult;

        return $new;
    }
}

