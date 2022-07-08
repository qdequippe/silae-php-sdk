<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactListeSalarieEmploisResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactListeSalarieEmploisResult
     */
    private $SWS_UtilisateurContactListeSalarieEmploisResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactListeSalarieEmploisResult
     */
    public function getSWS_UtilisateurContactListeSalarieEmploisResult()
    {
        return $this->SWS_UtilisateurContactListeSalarieEmploisResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactListeSalarieEmploisResult $SWS_UtilisateurContactListeSalarieEmploisResult
     * @return SWSUtilisateurContactListeSalarieEmploisResponse
     */
    public function withSWS_UtilisateurContactListeSalarieEmploisResult($SWS_UtilisateurContactListeSalarieEmploisResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactListeSalarieEmploisResult = $SWS_UtilisateurContactListeSalarieEmploisResult;

        return $new;
    }
}

