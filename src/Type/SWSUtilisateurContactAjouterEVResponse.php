<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactAjouterEVResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAjouterEVResult
     */
    private $SWS_UtilisateurContactAjouterEVResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAjouterEVResult
     */
    public function getSWS_UtilisateurContactAjouterEVResult()
    {
        return $this->SWS_UtilisateurContactAjouterEVResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAjouterEVResult $SWS_UtilisateurContactAjouterEVResult
     * @return SWSUtilisateurContactAjouterEVResponse
     */
    public function withSWS_UtilisateurContactAjouterEVResult($SWS_UtilisateurContactAjouterEVResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactAjouterEVResult = $SWS_UtilisateurContactAjouterEVResult;

        return $new;
    }
}

