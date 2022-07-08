<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactAcquisitionEAResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAcquisitionEAResult
     */
    private $SWS_UtilisateurContactAcquisitionEAResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAcquisitionEAResult
     */
    public function getSWS_UtilisateurContactAcquisitionEAResult()
    {
        return $this->SWS_UtilisateurContactAcquisitionEAResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAcquisitionEAResult $SWS_UtilisateurContactAcquisitionEAResult
     * @return SWSUtilisateurContactAcquisitionEAResponse
     */
    public function withSWS_UtilisateurContactAcquisitionEAResult($SWS_UtilisateurContactAcquisitionEAResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactAcquisitionEAResult = $SWS_UtilisateurContactAcquisitionEAResult;

        return $new;
    }
}

