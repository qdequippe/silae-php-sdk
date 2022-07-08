<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSListeInformationsDossiersPaieResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSListeInformationsDossiersPaieResult
     */
    private $SWS_ListeInformationsDossiersPaieResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSListeInformationsDossiersPaieResult
     */
    public function getSWS_ListeInformationsDossiersPaieResult()
    {
        return $this->SWS_ListeInformationsDossiersPaieResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSListeInformationsDossiersPaieResult $SWS_ListeInformationsDossiersPaieResult
     * @return SWSListeInformationsDossiersPaieResponse
     */
    public function withSWS_ListeInformationsDossiersPaieResult($SWS_ListeInformationsDossiersPaieResult)
    {
        $new = clone $this;
        $new->SWS_ListeInformationsDossiersPaieResult = $SWS_ListeInformationsDossiersPaieResult;

        return $new;
    }
}

