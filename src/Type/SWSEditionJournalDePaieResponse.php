<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSEditionJournalDePaieResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSEditionPaieResult
     */
    private $SWS_EditionJournalDePaieResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSEditionPaieResult
     */
    public function getSWS_EditionJournalDePaieResult()
    {
        return $this->SWS_EditionJournalDePaieResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSEditionPaieResult $SWS_EditionJournalDePaieResult
     * @return SWSEditionJournalDePaieResponse
     */
    public function withSWS_EditionJournalDePaieResult($SWS_EditionJournalDePaieResult)
    {
        $new = clone $this;
        $new->SWS_EditionJournalDePaieResult = $SWS_EditionJournalDePaieResult;

        return $new;
    }
}

