<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSAffectationDossierPaieResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSAffectationDossierPaieResult
     */
    private $SWS_AffectationDossierPaieResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSAffectationDossierPaieResult
     */
    public function getSWS_AffectationDossierPaieResult()
    {
        return $this->SWS_AffectationDossierPaieResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSAffectationDossierPaieResult $SWS_AffectationDossierPaieResult
     * @return SWSAffectationDossierPaieResponse
     */
    public function withSWS_AffectationDossierPaieResult($SWS_AffectationDossierPaieResult)
    {
        $new = clone $this;
        $new->SWS_AffectationDossierPaieResult = $SWS_AffectationDossierPaieResult;

        return $new;
    }
}

