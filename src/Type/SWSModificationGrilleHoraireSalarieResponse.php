<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSModificationGrilleHoraireSalarieResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSModificationGrilleHoraireResult
     */
    private $SWS_ModificationGrilleHoraireSalarieResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSModificationGrilleHoraireResult
     */
    public function getSWS_ModificationGrilleHoraireSalarieResult()
    {
        return $this->SWS_ModificationGrilleHoraireSalarieResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSModificationGrilleHoraireResult $SWS_ModificationGrilleHoraireSalarieResult
     * @return SWSModificationGrilleHoraireSalarieResponse
     */
    public function withSWS_ModificationGrilleHoraireSalarieResult($SWS_ModificationGrilleHoraireSalarieResult)
    {
        $new = clone $this;
        $new->SWS_ModificationGrilleHoraireSalarieResult = $SWS_ModificationGrilleHoraireSalarieResult;

        return $new;
    }
}

