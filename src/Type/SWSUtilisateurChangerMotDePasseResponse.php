<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurChangerMotDePasseResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurChangerMotDePasseResult
     */
    private $SWS_UtilisateurChangerMotDePasseResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurChangerMotDePasseResult
     */
    public function getSWS_UtilisateurChangerMotDePasseResult()
    {
        return $this->SWS_UtilisateurChangerMotDePasseResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurChangerMotDePasseResult $SWS_UtilisateurChangerMotDePasseResult
     * @return SWSUtilisateurChangerMotDePasseResponse
     */
    public function withSWS_UtilisateurChangerMotDePasseResult($SWS_UtilisateurChangerMotDePasseResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurChangerMotDePasseResult = $SWS_UtilisateurChangerMotDePasseResult;

        return $new;
    }
}

