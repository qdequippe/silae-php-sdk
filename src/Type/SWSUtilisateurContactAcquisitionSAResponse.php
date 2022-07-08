<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactAcquisitionSAResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAcquisitionSAResult
     */
    private $SWS_UtilisateurContactAcquisitionSAResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAcquisitionSAResult
     */
    public function getSWS_UtilisateurContactAcquisitionSAResult()
    {
        return $this->SWS_UtilisateurContactAcquisitionSAResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAcquisitionSAResult $SWS_UtilisateurContactAcquisitionSAResult
     * @return SWSUtilisateurContactAcquisitionSAResponse
     */
    public function withSWS_UtilisateurContactAcquisitionSAResult($SWS_UtilisateurContactAcquisitionSAResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactAcquisitionSAResult = $SWS_UtilisateurContactAcquisitionSAResult;

        return $new;
    }
}

