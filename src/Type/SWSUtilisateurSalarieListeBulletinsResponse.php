<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSalarieListeBulletinsResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieListeBulletinsResult
     */
    private $SWS_UtilisateurSalarieListeBulletinsResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieListeBulletinsResult
     */
    public function getSWS_UtilisateurSalarieListeBulletinsResult()
    {
        return $this->SWS_UtilisateurSalarieListeBulletinsResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieListeBulletinsResult $SWS_UtilisateurSalarieListeBulletinsResult
     * @return SWSUtilisateurSalarieListeBulletinsResponse
     */
    public function withSWS_UtilisateurSalarieListeBulletinsResult($SWS_UtilisateurSalarieListeBulletinsResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSalarieListeBulletinsResult = $SWS_UtilisateurSalarieListeBulletinsResult;

        return $new;
    }
}

