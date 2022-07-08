<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactConfirmerHMensResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactConfirmerHMensResult
     */
    private $SWS_UtilisateurContactConfirmerHMensResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactConfirmerHMensResult
     */
    public function getSWS_UtilisateurContactConfirmerHMensResult()
    {
        return $this->SWS_UtilisateurContactConfirmerHMensResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactConfirmerHMensResult $SWS_UtilisateurContactConfirmerHMensResult
     * @return SWSUtilisateurContactConfirmerHMensResponse
     */
    public function withSWS_UtilisateurContactConfirmerHMensResult($SWS_UtilisateurContactConfirmerHMensResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactConfirmerHMensResult = $SWS_UtilisateurContactConfirmerHMensResult;

        return $new;
    }
}

