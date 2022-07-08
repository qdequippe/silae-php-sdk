<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSuperviseurAcquisitionSAResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurAcquisitionSAResult
     */
    private $SWS_UtilisateurSuperviseurAcquisitionSAResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurAcquisitionSAResult
     */
    public function getSWS_UtilisateurSuperviseurAcquisitionSAResult()
    {
        return $this->SWS_UtilisateurSuperviseurAcquisitionSAResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurAcquisitionSAResult $SWS_UtilisateurSuperviseurAcquisitionSAResult
     * @return SWSUtilisateurSuperviseurAcquisitionSAResponse
     */
    public function withSWS_UtilisateurSuperviseurAcquisitionSAResult($SWS_UtilisateurSuperviseurAcquisitionSAResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSuperviseurAcquisitionSAResult = $SWS_UtilisateurSuperviseurAcquisitionSAResult;

        return $new;
    }
}

