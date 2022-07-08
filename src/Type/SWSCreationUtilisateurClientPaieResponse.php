<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSCreationUtilisateurClientPaieResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSCreationUtilisateurClientPaieResult
     */
    private $SWS_CreationUtilisateurClientPaieResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSCreationUtilisateurClientPaieResult
     */
    public function getSWS_CreationUtilisateurClientPaieResult()
    {
        return $this->SWS_CreationUtilisateurClientPaieResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSCreationUtilisateurClientPaieResult $SWS_CreationUtilisateurClientPaieResult
     * @return SWSCreationUtilisateurClientPaieResponse
     */
    public function withSWS_CreationUtilisateurClientPaieResult($SWS_CreationUtilisateurClientPaieResult)
    {
        $new = clone $this;
        $new->SWS_CreationUtilisateurClientPaieResult = $SWS_CreationUtilisateurClientPaieResult;

        return $new;
    }
}

