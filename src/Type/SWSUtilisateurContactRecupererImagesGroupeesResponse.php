<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactRecupererImagesGroupeesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactRecupererImagesGroupeesResult
     */
    private $SWS_UtilisateurContactRecupererImagesGroupeesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactRecupererImagesGroupeesResult
     */
    public function getSWS_UtilisateurContactRecupererImagesGroupeesResult()
    {
        return $this->SWS_UtilisateurContactRecupererImagesGroupeesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactRecupererImagesGroupeesResult $SWS_UtilisateurContactRecupererImagesGroupeesResult
     * @return SWSUtilisateurContactRecupererImagesGroupeesResponse
     */
    public function withSWS_UtilisateurContactRecupererImagesGroupeesResult($SWS_UtilisateurContactRecupererImagesGroupeesResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactRecupererImagesGroupeesResult = $SWS_UtilisateurContactRecupererImagesGroupeesResult;

        return $new;
    }
}

