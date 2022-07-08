<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSModificationGrilleHoraireEtablissementResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSModificationGrilleHoraireResult
     */
    private $SWS_ModificationGrilleHoraireEtablissementResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSModificationGrilleHoraireResult
     */
    public function getSWS_ModificationGrilleHoraireEtablissementResult()
    {
        return $this->SWS_ModificationGrilleHoraireEtablissementResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSModificationGrilleHoraireResult $SWS_ModificationGrilleHoraireEtablissementResult
     * @return SWSModificationGrilleHoraireEtablissementResponse
     */
    public function withSWS_ModificationGrilleHoraireEtablissementResult($SWS_ModificationGrilleHoraireEtablissementResult)
    {
        $new = clone $this;
        $new->SWS_ModificationGrilleHoraireEtablissementResult = $SWS_ModificationGrilleHoraireEtablissementResult;

        return $new;
    }
}

