<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSModificationSaisieArretResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSModificationSaisieArretResult
     */
    private $SWS_ModificationSaisieArretResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSModificationSaisieArretResult
     */
    public function getSWS_ModificationSaisieArretResult()
    {
        return $this->SWS_ModificationSaisieArretResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSModificationSaisieArretResult $SWS_ModificationSaisieArretResult
     * @return SWSModificationSaisieArretResponse
     */
    public function withSWS_ModificationSaisieArretResult($SWS_ModificationSaisieArretResult)
    {
        $new = clone $this;
        $new->SWS_ModificationSaisieArretResult = $SWS_ModificationSaisieArretResult;

        return $new;
    }
}

