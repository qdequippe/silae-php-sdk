<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSalarieSimulerCompteursResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieSimulerCompteursResult
     */
    private $SWS_UtilisateurSalarieSimulerCompteursResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieSimulerCompteursResult
     */
    public function getSWS_UtilisateurSalarieSimulerCompteursResult()
    {
        return $this->SWS_UtilisateurSalarieSimulerCompteursResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieSimulerCompteursResult $SWS_UtilisateurSalarieSimulerCompteursResult
     * @return SWSUtilisateurSalarieSimulerCompteursResponse
     */
    public function withSWS_UtilisateurSalarieSimulerCompteursResult($SWS_UtilisateurSalarieSimulerCompteursResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSalarieSimulerCompteursResult = $SWS_UtilisateurSalarieSimulerCompteursResult;

        return $new;
    }
}

