<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactAcquisitionDroitResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAcquisitionDroitResult
     */
    private $SWS_UtilisateurContactAcquisitionDroitResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAcquisitionDroitResult
     */
    public function getSWS_UtilisateurContactAcquisitionDroitResult()
    {
        return $this->SWS_UtilisateurContactAcquisitionDroitResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAcquisitionDroitResult $SWS_UtilisateurContactAcquisitionDroitResult
     * @return SWSUtilisateurContactAcquisitionDroitResponse
     */
    public function withSWS_UtilisateurContactAcquisitionDroitResult($SWS_UtilisateurContactAcquisitionDroitResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactAcquisitionDroitResult = $SWS_UtilisateurContactAcquisitionDroitResult;

        return $new;
    }
}

