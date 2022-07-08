<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactAcquisitionAcompteResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAcquisitionAcompteResult
     */
    private $SWS_UtilisateurContactAcquisitionAcompteResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAcquisitionAcompteResult
     */
    public function getSWS_UtilisateurContactAcquisitionAcompteResult()
    {
        return $this->SWS_UtilisateurContactAcquisitionAcompteResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAcquisitionAcompteResult $SWS_UtilisateurContactAcquisitionAcompteResult
     * @return SWSUtilisateurContactAcquisitionAcompteResponse
     */
    public function withSWS_UtilisateurContactAcquisitionAcompteResult($SWS_UtilisateurContactAcquisitionAcompteResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactAcquisitionAcompteResult = $SWS_UtilisateurContactAcquisitionAcompteResult;

        return $new;
    }
}

