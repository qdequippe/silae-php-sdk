<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSListeEtablissementsDossierPaieResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSListeEtablissementsDossierPaieResult
     */
    private $SWS_ListeEtablissementsDossierPaieResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSListeEtablissementsDossierPaieResult
     */
    public function getSWS_ListeEtablissementsDossierPaieResult()
    {
        return $this->SWS_ListeEtablissementsDossierPaieResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSListeEtablissementsDossierPaieResult $SWS_ListeEtablissementsDossierPaieResult
     * @return SWSListeEtablissementsDossierPaieResponse
     */
    public function withSWS_ListeEtablissementsDossierPaieResult($SWS_ListeEtablissementsDossierPaieResult)
    {
        $new = clone $this;
        $new->SWS_ListeEtablissementsDossierPaieResult = $SWS_ListeEtablissementsDossierPaieResult;

        return $new;
    }
}

