<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSRecuperationInformationsDomainesEtUtilisateursResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSRecuperationInformationsDomainesEtUtilisateursResult
     */
    private $SWS_RecuperationInformationsDomainesEtUtilisateursResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSRecuperationInformationsDomainesEtUtilisateursResult
     */
    public function getSWS_RecuperationInformationsDomainesEtUtilisateursResult()
    {
        return $this->SWS_RecuperationInformationsDomainesEtUtilisateursResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSRecuperationInformationsDomainesEtUtilisateursResult $SWS_RecuperationInformationsDomainesEtUtilisateursResult
     * @return SWSRecuperationInformationsDomainesEtUtilisateursResponse
     */
    public function withSWS_RecuperationInformationsDomainesEtUtilisateursResult($SWS_RecuperationInformationsDomainesEtUtilisateursResult)
    {
        $new = clone $this;
        $new->SWS_RecuperationInformationsDomainesEtUtilisateursResult = $SWS_RecuperationInformationsDomainesEtUtilisateursResult;

        return $new;
    }
}

