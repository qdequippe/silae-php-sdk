<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactValiderTMResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactValiderTMResult
     */
    private $SWS_UtilisateurContactValiderTMResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactValiderTMResult
     */
    public function getSWS_UtilisateurContactValiderTMResult()
    {
        return $this->SWS_UtilisateurContactValiderTMResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactValiderTMResult $SWS_UtilisateurContactValiderTMResult
     * @return SWSUtilisateurContactValiderTMResponse
     */
    public function withSWS_UtilisateurContactValiderTMResult($SWS_UtilisateurContactValiderTMResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactValiderTMResult = $SWS_UtilisateurContactValiderTMResult;

        return $new;
    }
}

