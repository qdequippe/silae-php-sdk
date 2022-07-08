<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactAjouterAcompteResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAjouterAcompteResult
     */
    private $SWS_UtilisateurContactAjouterAcompteResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAjouterAcompteResult
     */
    public function getSWS_UtilisateurContactAjouterAcompteResult()
    {
        return $this->SWS_UtilisateurContactAjouterAcompteResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAjouterAcompteResult $SWS_UtilisateurContactAjouterAcompteResult
     * @return SWSUtilisateurContactAjouterAcompteResponse
     */
    public function withSWS_UtilisateurContactAjouterAcompteResult($SWS_UtilisateurContactAjouterAcompteResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactAjouterAcompteResult = $SWS_UtilisateurContactAjouterAcompteResult;

        return $new;
    }
}

