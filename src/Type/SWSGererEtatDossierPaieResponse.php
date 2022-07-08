<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSGererEtatDossierPaieResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSGererEtatDossierPaieResult
     */
    private $SWS_GererEtatDossierPaieResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSGererEtatDossierPaieResult
     */
    public function getSWS_GererEtatDossierPaieResult()
    {
        return $this->SWS_GererEtatDossierPaieResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSGererEtatDossierPaieResult $SWS_GererEtatDossierPaieResult
     * @return SWSGererEtatDossierPaieResponse
     */
    public function withSWS_GererEtatDossierPaieResult($SWS_GererEtatDossierPaieResult)
    {
        $new = clone $this;
        $new->SWS_GererEtatDossierPaieResult = $SWS_GererEtatDossierPaieResult;

        return $new;
    }
}

