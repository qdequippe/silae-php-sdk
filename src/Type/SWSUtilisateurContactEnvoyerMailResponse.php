<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactEnvoyerMailResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactEnvoyerMailResult
     */
    private $SWS_UtilisateurContactEnvoyerMailResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactEnvoyerMailResult
     */
    public function getSWS_UtilisateurContactEnvoyerMailResult()
    {
        return $this->SWS_UtilisateurContactEnvoyerMailResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactEnvoyerMailResult $SWS_UtilisateurContactEnvoyerMailResult
     * @return SWSUtilisateurContactEnvoyerMailResponse
     */
    public function withSWS_UtilisateurContactEnvoyerMailResult($SWS_UtilisateurContactEnvoyerMailResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactEnvoyerMailResult = $SWS_UtilisateurContactEnvoyerMailResult;

        return $new;
    }
}

