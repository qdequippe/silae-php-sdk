<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSDefinitionPeriodeComptableDossierResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSDefinitionPeriodeComptableDossierResult
     */
    private $SWS_DefinitionPeriodeComptableDossierResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSDefinitionPeriodeComptableDossierResult
     */
    public function getSWS_DefinitionPeriodeComptableDossierResult()
    {
        return $this->SWS_DefinitionPeriodeComptableDossierResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSDefinitionPeriodeComptableDossierResult $SWS_DefinitionPeriodeComptableDossierResult
     * @return SWSDefinitionPeriodeComptableDossierResponse
     */
    public function withSWS_DefinitionPeriodeComptableDossierResult($SWS_DefinitionPeriodeComptableDossierResult)
    {
        $new = clone $this;
        $new->SWS_DefinitionPeriodeComptableDossierResult = $SWS_DefinitionPeriodeComptableDossierResult;

        return $new;
    }
}

