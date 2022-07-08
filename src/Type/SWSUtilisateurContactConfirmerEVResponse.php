<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactConfirmerEVResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactConfirmerEVResult
     */
    private $SWS_UtilisateurContactConfirmerEVResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactConfirmerEVResult
     */
    public function getSWS_UtilisateurContactConfirmerEVResult()
    {
        return $this->SWS_UtilisateurContactConfirmerEVResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactConfirmerEVResult $SWS_UtilisateurContactConfirmerEVResult
     * @return SWSUtilisateurContactConfirmerEVResponse
     */
    public function withSWS_UtilisateurContactConfirmerEVResult($SWS_UtilisateurContactConfirmerEVResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactConfirmerEVResult = $SWS_UtilisateurContactConfirmerEVResult;

        return $new;
    }
}

