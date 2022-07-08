<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactModifierHMensResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactModifierHMensResult
     */
    private $SWS_UtilisateurContactModifierHMensResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactModifierHMensResult
     */
    public function getSWS_UtilisateurContactModifierHMensResult()
    {
        return $this->SWS_UtilisateurContactModifierHMensResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactModifierHMensResult $SWS_UtilisateurContactModifierHMensResult
     * @return SWSUtilisateurContactModifierHMensResponse
     */
    public function withSWS_UtilisateurContactModifierHMensResult($SWS_UtilisateurContactModifierHMensResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactModifierHMensResult = $SWS_UtilisateurContactModifierHMensResult;

        return $new;
    }
}

