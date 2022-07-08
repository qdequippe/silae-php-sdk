<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactAcquisitionAJResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAcquisitionAJResult
     */
    private $SWS_UtilisateurContactAcquisitionAJResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAcquisitionAJResult
     */
    public function getSWS_UtilisateurContactAcquisitionAJResult()
    {
        return $this->SWS_UtilisateurContactAcquisitionAJResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAcquisitionAJResult $SWS_UtilisateurContactAcquisitionAJResult
     * @return SWSUtilisateurContactAcquisitionAJResponse
     */
    public function withSWS_UtilisateurContactAcquisitionAJResult($SWS_UtilisateurContactAcquisitionAJResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactAcquisitionAJResult = $SWS_UtilisateurContactAcquisitionAJResult;

        return $new;
    }
}

