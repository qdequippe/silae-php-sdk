<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSRAZPeriodeComptableDossierResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSRAZPeriodeComptableDossierResult
     */
    private $SWS_RAZPeriodeComptableDossierResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSRAZPeriodeComptableDossierResult
     */
    public function getSWS_RAZPeriodeComptableDossierResult()
    {
        return $this->SWS_RAZPeriodeComptableDossierResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSRAZPeriodeComptableDossierResult $SWS_RAZPeriodeComptableDossierResult
     * @return SWSRAZPeriodeComptableDossierResponse
     */
    public function withSWS_RAZPeriodeComptableDossierResult($SWS_RAZPeriodeComptableDossierResult)
    {
        $new = clone $this;
        $new->SWS_RAZPeriodeComptableDossierResult = $SWS_RAZPeriodeComptableDossierResult;

        return $new;
    }
}

