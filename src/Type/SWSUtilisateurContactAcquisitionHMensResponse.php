<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactAcquisitionHMensResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAcquisitionHMensResult
     */
    private $SWS_UtilisateurContactAcquisitionHMensResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAcquisitionHMensResult
     */
    public function getSWS_UtilisateurContactAcquisitionHMensResult()
    {
        return $this->SWS_UtilisateurContactAcquisitionHMensResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAcquisitionHMensResult $SWS_UtilisateurContactAcquisitionHMensResult
     * @return SWSUtilisateurContactAcquisitionHMensResponse
     */
    public function withSWS_UtilisateurContactAcquisitionHMensResult($SWS_UtilisateurContactAcquisitionHMensResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactAcquisitionHMensResult = $SWS_UtilisateurContactAcquisitionHMensResult;

        return $new;
    }
}

