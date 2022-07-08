<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactAcquisitionEVResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAcquisitionEVResult
     */
    private $SWS_UtilisateurContactAcquisitionEVResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAcquisitionEVResult
     */
    public function getSWS_UtilisateurContactAcquisitionEVResult()
    {
        return $this->SWS_UtilisateurContactAcquisitionEVResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAcquisitionEVResult $SWS_UtilisateurContactAcquisitionEVResult
     * @return SWSUtilisateurContactAcquisitionEVResponse
     */
    public function withSWS_UtilisateurContactAcquisitionEVResult($SWS_UtilisateurContactAcquisitionEVResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactAcquisitionEVResult = $SWS_UtilisateurContactAcquisitionEVResult;

        return $new;
    }
}

