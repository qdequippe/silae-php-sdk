<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSModificationDroitsFonctionnelsProductionPaieResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSModificationDroitsFonctionnelsProductionPaieResult
     */
    private $SWS_ModificationDroitsFonctionnelsProductionPaieResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSModificationDroitsFonctionnelsProductionPaieResult
     */
    public function getSWS_ModificationDroitsFonctionnelsProductionPaieResult()
    {
        return $this->SWS_ModificationDroitsFonctionnelsProductionPaieResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSModificationDroitsFonctionnelsProductionPaieResult $SWS_ModificationDroitsFonctionnelsProductionPaieResult
     * @return SWSModificationDroitsFonctionnelsProductionPaieResponse
     */
    public function withSWS_ModificationDroitsFonctionnelsProductionPaieResult($SWS_ModificationDroitsFonctionnelsProductionPaieResult)
    {
        $new = clone $this;
        $new->SWS_ModificationDroitsFonctionnelsProductionPaieResult = $SWS_ModificationDroitsFonctionnelsProductionPaieResult;

        return $new;
    }
}

