<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSupprimerVisiteMedicaleResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSupprimerVisiteMedicaleResult
     */
    private $SWS_SupprimerVisiteMedicaleResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSupprimerVisiteMedicaleResult
     */
    public function getSWS_SupprimerVisiteMedicaleResult()
    {
        return $this->SWS_SupprimerVisiteMedicaleResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSupprimerVisiteMedicaleResult $SWS_SupprimerVisiteMedicaleResult
     * @return SWSSupprimerVisiteMedicaleResponse
     */
    public function withSWS_SupprimerVisiteMedicaleResult($SWS_SupprimerVisiteMedicaleResult)
    {
        $new = clone $this;
        $new->SWS_SupprimerVisiteMedicaleResult = $SWS_SupprimerVisiteMedicaleResult;

        return $new;
    }
}

