<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactAcquisitionSalariesFiltreResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAcquisitionSalariesFiltreResult
     */
    private $SWS_UtilisateurContactAcquisitionSalariesFiltreResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAcquisitionSalariesFiltreResult
     */
    public function getSWS_UtilisateurContactAcquisitionSalariesFiltreResult()
    {
        return $this->SWS_UtilisateurContactAcquisitionSalariesFiltreResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactAcquisitionSalariesFiltreResult $SWS_UtilisateurContactAcquisitionSalariesFiltreResult
     * @return SWSUtilisateurContactAcquisitionSalariesFiltreResponse
     */
    public function withSWS_UtilisateurContactAcquisitionSalariesFiltreResult($SWS_UtilisateurContactAcquisitionSalariesFiltreResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactAcquisitionSalariesFiltreResult = $SWS_UtilisateurContactAcquisitionSalariesFiltreResult;

        return $new;
    }
}

