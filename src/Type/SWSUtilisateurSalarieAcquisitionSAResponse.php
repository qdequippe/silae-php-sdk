<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSalarieAcquisitionSAResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieAcquisitionSAResult
     */
    private $SWS_UtilisateurSalarieAcquisitionSAResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieAcquisitionSAResult
     */
    public function getSWS_UtilisateurSalarieAcquisitionSAResult()
    {
        return $this->SWS_UtilisateurSalarieAcquisitionSAResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieAcquisitionSAResult $SWS_UtilisateurSalarieAcquisitionSAResult
     * @return SWSUtilisateurSalarieAcquisitionSAResponse
     */
    public function withSWS_UtilisateurSalarieAcquisitionSAResult($SWS_UtilisateurSalarieAcquisitionSAResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSalarieAcquisitionSAResult = $SWS_UtilisateurSalarieAcquisitionSAResult;

        return $new;
    }
}

