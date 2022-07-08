<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactAcquisitionSalariesAJResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAcquisitionSalariesAJResult
     */
    private $SWS_UtilisateurContactAcquisitionSalariesAJResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAcquisitionSalariesAJResult
     */
    public function getSWS_UtilisateurContactAcquisitionSalariesAJResult()
    {
        return $this->SWS_UtilisateurContactAcquisitionSalariesAJResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAcquisitionSalariesAJResult $SWS_UtilisateurContactAcquisitionSalariesAJResult
     * @return SWSUtilisateurContactAcquisitionSalariesAJResponse
     */
    public function withSWS_UtilisateurContactAcquisitionSalariesAJResult($SWS_UtilisateurContactAcquisitionSalariesAJResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactAcquisitionSalariesAJResult = $SWS_UtilisateurContactAcquisitionSalariesAJResult;

        return $new;
    }
}

