<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactEtatTMResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactEtatTMResult
     */
    private $SWS_UtilisateurContactEtatTMResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactEtatTMResult
     */
    public function getSWS_UtilisateurContactEtatTMResult()
    {
        return $this->SWS_UtilisateurContactEtatTMResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactEtatTMResult $SWS_UtilisateurContactEtatTMResult
     * @return SWSUtilisateurContactEtatTMResponse
     */
    public function withSWS_UtilisateurContactEtatTMResult($SWS_UtilisateurContactEtatTMResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactEtatTMResult = $SWS_UtilisateurContactEtatTMResult;

        return $new;
    }
}

