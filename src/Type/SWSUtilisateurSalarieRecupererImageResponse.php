<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSalarieRecupererImageResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSRecupererImageResult
     */
    private $SWS_UtilisateurSalarieRecupererImageResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSRecupererImageResult
     */
    public function getSWS_UtilisateurSalarieRecupererImageResult()
    {
        return $this->SWS_UtilisateurSalarieRecupererImageResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSRecupererImageResult $SWS_UtilisateurSalarieRecupererImageResult
     * @return SWSUtilisateurSalarieRecupererImageResponse
     */
    public function withSWS_UtilisateurSalarieRecupererImageResult($SWS_UtilisateurSalarieRecupererImageResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSalarieRecupererImageResult = $SWS_UtilisateurSalarieRecupererImageResult;

        return $new;
    }
}

