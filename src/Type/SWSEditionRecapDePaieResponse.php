<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSEditionRecapDePaieResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSEditionPaieResult
     */
    private $SWS_EditionRecapDePaieResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSEditionPaieResult
     */
    public function getSWS_EditionRecapDePaieResult()
    {
        return $this->SWS_EditionRecapDePaieResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSEditionPaieResult $SWS_EditionRecapDePaieResult
     * @return SWSEditionRecapDePaieResponse
     */
    public function withSWS_EditionRecapDePaieResult($SWS_EditionRecapDePaieResult)
    {
        $new = clone $this;
        $new->SWS_EditionRecapDePaieResult = $SWS_EditionRecapDePaieResult;

        return $new;
    }
}

