<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSEditionTableauDesChargesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSEditionPaieResult
     */
    private $SWS_EditionTableauDesChargesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSEditionPaieResult
     */
    public function getSWS_EditionTableauDesChargesResult()
    {
        return $this->SWS_EditionTableauDesChargesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSEditionPaieResult $SWS_EditionTableauDesChargesResult
     * @return SWSEditionTableauDesChargesResponse
     */
    public function withSWS_EditionTableauDesChargesResult($SWS_EditionTableauDesChargesResult)
    {
        $new = clone $this;
        $new->SWS_EditionTableauDesChargesResult = $SWS_EditionTableauDesChargesResult;

        return $new;
    }
}

