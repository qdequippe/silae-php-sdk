<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSMiseAJourFicheEtablissementResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSMiseAJourFicheEtablissementResult
     */
    private $SWS_MiseAJourFicheEtablissementResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSMiseAJourFicheEtablissementResult
     */
    public function getSWS_MiseAJourFicheEtablissementResult()
    {
        return $this->SWS_MiseAJourFicheEtablissementResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSMiseAJourFicheEtablissementResult $SWS_MiseAJourFicheEtablissementResult
     * @return SWSMiseAJourFicheEtablissementResponse
     */
    public function withSWS_MiseAJourFicheEtablissementResult($SWS_MiseAJourFicheEtablissementResult)
    {
        $new = clone $this;
        $new->SWS_MiseAJourFicheEtablissementResult = $SWS_MiseAJourFicheEtablissementResult;

        return $new;
    }
}

